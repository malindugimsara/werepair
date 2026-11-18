<?php session_start(); // Start the session at the very beginning

$url = "https://werepair.lk/admin/";


if (isset($_SESSION["sa21-user"])) {
} else {
    header('Location: ' . $url . 'signin.php');
}
?>