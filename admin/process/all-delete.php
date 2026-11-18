<?php
session_start();
include 'connection.php';

if (isset($_POST["Check-request"]) && isset($_SESSION["sa21-user"])) {
    $Check_request = $_POST["Check-request"];


    if ($Check_request == "project") {

        $project_id = $_POST["id"];

        $result_set = Database::search("SELECT * FROM `project` WHERE `id`='" . $project_id . "'");
        $result_data = $result_set->fetch_assoc();

        // Delete article images
        $result_set_doc = Database::search("SELECT * FROM `project_images` WHERE `project_id`='" . $project_id . "'");
        $row_count_doc = $result_set_doc->num_rows;

        if ($row_count_doc > 0) {

            for ($i = 0; $i < $row_count_doc; $i++) {
                $result_data_doc = $result_set_doc->fetch_assoc();

                unlink("../../" . $result_data_doc["code"]);

                Database::search("DELETE FROM `project_images` WHERE `id`='" . $result_data_doc["id"] . "'");
            }
        }

        Database::search("DELETE FROM `project` WHERE `id`='" . $project_id . "'");
        echo "Success";
    } else if ($Check_request == "project-img") {
        $id = str_replace("'", "\'", $_POST["id"]);

        $results =   Database::search("SELECT * FROM `project_images` WHERE `id`='" . $id . "'");
        $td =  $results->fetch_assoc();

        unlink("../../" . $td["code"]);

        Database::search("DELETE FROM `project_images` WHERE `id`='" . $id . "'");
        echo "Success";
    } 
}
