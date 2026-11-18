<?php
session_start();
require "connection.php";

$username = $_POST["username"];
$password = $_POST["password"];
$remember_me = $_POST["remember_me"];

if (empty($username)) {
    echo "Please enter your username!";
} else if (ctype_space($username)) {
    echo "You can't just only put spaces in the username field!";
} else if (empty($password)) {
    echo "Please enter your password!";
} else if (ctype_space($password)) {
    echo "You cannot put only spaces in the password field!";
} else {

    $result_set = Database::search("SELECT * FROM `users` WHERE `username`='" . $username . "' AND  `password`='" . md5($password) . "'");
    $row_count = $result_set->num_rows;

    if ($row_count > 0) {
        $data = $result_set->fetch_assoc();

        $_SESSION["sa21-user"] = $data;
        echo "Success";

    } else {
        echo "Login information is invalid. Please try again!";
    }
}
