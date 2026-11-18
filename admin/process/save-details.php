<?php
session_start();
include 'connection.php';

if (isset($_POST["Check-request"]) && isset($_SESSION["sa21-user"])) {
    $Check_request = $_POST["Check-request"];

    if ($Check_request == "project-add") {

        $title = str_replace('\'', "\"", $_POST["title"]);
        $des = str_replace('\'', "\"", $_POST["des"]);

        $meta_title = str_replace('\'', "\"", $_POST["meta_title"]);
        $meta_des = str_replace('\'', "\"", $_POST["meta_des"]);
        $meta_kw = str_replace('\'', "\"", $_POST["meta_kw"]);

        if (empty($title)) {
            echo "Please enter project title!";
        } else if (ctype_space($title)) {
            echo "You cannot put only spaces in the project title field!";
        } else if (strlen($title) > 300) {
            echo "Project title must be less than 300 characters!";
        } else if (empty($meta_title)) {
            echo "Please enter meta title!";
        } else if (ctype_space($meta_title)) {
            echo "You cannot put only spaces in the project meta title field!";
        } else if (strlen($meta_title) > 60) {
            echo "Project meta title must be less than 60 characters!";
        } else if (empty($meta_kw)) {
            echo "Please enter meta keywords!";
        } else if (ctype_space($meta_kw)) {
            echo "You cannot put only spaces in the project meta keywords field!";
        } else if (empty($meta_des)) {
            echo "Please enter meta description!";
        } else if (ctype_space($meta_des)) {
            echo "You cannot put only spaces in the project meta description field!";
        } else if (strlen($meta_des) > 160) {
            echo "Project meta description must be less than 160 characters!";
        } else {

            $timezone_offset_minutes = 330;
            $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes * 60, false);

            $date_time = new DateTime();
            $tz = new DateTimeZone($timezone_name);
            $date_time->setTimezone($tz);
            $date = $date_time->format("Y-m-d");

            $error_status = 0;
            $countfiles = 0;
            $file_size = 0;
            $video_size = 0;
            $video_extension = '';

            // Check images
            if ($error_status == 0 && isset($_FILES["files"])) {

                $countfiles = count($_FILES['files']['name']);

                for ($i = 0; $i < $countfiles; $i++) {

                    // File name
                    $filename = $_FILES["files"]['name'][$i];
                    $file_size = $file_size + $_FILES['files']['size'][$i];

                    // file extension
                    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
                    $file_extension = strtolower($file_extension);

                    // Valid file extensions
                    $valid_ext = array("jpg", "png", "jpeg", "svg", "tiff");
                    // Check extension
                    if (!in_array($file_extension, $valid_ext)) {
                        $error_status = 1;
                        echo "Images contain images not equal to jpg, jpeg, png, svg, tiff Remove them!";
                        break;
                    }
                }
            }


            if ($error_status == 0 && $countfiles > 25) {
                echo "A maximum of 25 images can be uploaded!";
                $error_status = 1;
            }

            if ($error_status == 0 && $file_size > 10485760) {
                echo "The maximum images size that can be uploaded is 10MB!";
                $error_status = 1;
            }

            if ($error_status == 0) {

                $result_set = Database::search("SELECT * FROM `project` WHERE `title`='" . $title . "'");
                $row_count = $result_set->num_rows;

                if ($row_count > 0) {
                    echo "This project title has already been added!";
                } else {

                    Database::iud("INSERT INTO `project` (`title`,`description`,`add_on`,`meta_title`,
                    `meta_des`,`meta_keywords`) 
                         VALUES ('" . $title . "','" . $des . "','" . $date . "','" . $meta_title . "'
                         ,'" . $meta_des . "','" . $meta_kw . "')");

                    $result_set = Database::search("SELECT * FROM `project` WHERE `title`='" . $title . "'");
                    $result_data = $result_set->fetch_assoc();
                    $article_id = $result_data["id"];

                    // Handle image uploads
                    if (isset($_FILES["files"])) {


                        $countfiles2 = count($_FILES['files']['name']);

                        for ($i = 0; $i < $countfiles2; $i++) {

                            $milliseconds = floor(microtime(true) * 1000);

                            $imagefile = $_FILES["files"]["name"][$i];

                            $image = $_FILES["files"]["name"][$i];

                            $file_extension = pathinfo($image, PATHINFO_EXTENSION);
                            $file_extension = strtolower($file_extension);

                            $file_extention = $_FILES["files"]["type"][$i];

                            $uni_id = uniqid() . $milliseconds . "." . $file_extension;

                            $file_name = "../../upload/project/" . $uni_id;
                            $file_name2 = "upload/project/" . $uni_id;

                            move_uploaded_file($_FILES['files']['tmp_name'][$i], $file_name);
                            Database::iud("INSERT INTO `project_images` (`code`,`project_id`) VALUES
                                ('" . $file_name2 . "','" . $article_id . "')");
                        }
                    }

                    echo "Success";
                }
            }
        }
    }
}
