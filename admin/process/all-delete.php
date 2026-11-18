<?php
session_start();
include 'connection.php';

if (isset($_POST["Check-request"]) && isset($_SESSION["sa21-user"])) {
    $Check_request = $_POST["Check-request"];

    if ($Check_request == "project" && isset($_POST["id"])) {
        $project_id = intval($_POST["id"]);

        $result_set = Database::search("SELECT * FROM `project` WHERE `id`=" . $project_id);
        $result_data = $result_set ? $result_set->fetch_assoc() : null;

        // Delete article images
        $result_set_doc = Database::search("SELECT * FROM `project_images` WHERE `project_id`=" . $project_id);
        $row_count_doc = $result_set_doc ? $result_set_doc->num_rows : 0;

        if ($row_count_doc > 0) {
            for ($i = 0; $i < $row_count_doc; $i++) {
                $result_data_doc = $result_set_doc->fetch_assoc();
                $resolved_rel = resolve_project_image($result_data_doc["code"]);
                $file_path = "../../" . $resolved_rel;
                if (file_exists($file_path)) {
                    @unlink($file_path);
                }
                $alt_path = preg_match('/\.webp$/i', $file_path) ? preg_replace('/\.webp$/i', '.png', $file_path) : preg_replace('/\.(png|jpe?g)$/i', '.webp', $file_path);
                if (file_exists($alt_path)) {
                    @unlink($alt_path);
                }
                Database::iud("DELETE FROM `project_images` WHERE `id`=" . intval($result_data_doc["id"]));
            }
        }

        Database::iud("DELETE FROM `project` WHERE `id`=" . $project_id);
        echo "Success";
    } else if ($Check_request == "project-img" && isset($_POST["id"])) {
        $id = intval($_POST["id"]);

        $results = Database::search("SELECT * FROM `project_images` WHERE `id`=" . $id);
        if ($results && $results->num_rows > 0) {
            $td = $results->fetch_assoc();
            $resolved_rel = resolve_project_image($td["code"]);
            $file_path = "../../" . $resolved_rel;
            if (file_exists($file_path)) {
                @unlink($file_path);
            }
            $alt_path = preg_match('/\.webp$/i', $file_path) ? preg_replace('/\.webp$/i', '.png', $file_path) : preg_replace('/\.(png|jpe?g)$/i', '.webp', $file_path);
            if (file_exists($alt_path)) {
                @unlink($alt_path);
            }
            Database::iud("DELETE FROM `project_images` WHERE `id`=" . $id);
            echo "Success";
        }
    } 
}
