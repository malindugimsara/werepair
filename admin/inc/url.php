<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$isLocal = (isset($_SERVER['HTTP_HOST']) && (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false || $_SERVER['HTTP_HOST'] === '127.0.0.1'));
$url = $isLocal ? "http://" . $_SERVER['HTTP_HOST'] . "/werepair/admin/" : "https://werepair.lk/admin/";

if (!isset($_SESSION["sa21-user"])) {
    header('Location: ' . $url . 'signin.php');
    exit();
}
?>