<?php
session_start();
$remember_me = $_POST["remember_me"] ?? '';

if ($remember_me == "true" && isset($_SESSION["sa21-user"]["username"])) {
    $cookie_options = [
        'expires' => time() + (60 * 60 * 24 * 30), // 30 days
        'path' => '/',
        'secure' => (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'),
        'httponly' => true,
        'samesite' => 'Lax'
    ];
    setcookie("sa21-username", $_SESSION["sa21-user"]["username"], $cookie_options);
    // Explicitly delete any old password cookies
    setcookie("sa21-password", "", time() - 3600, "/");
} else {
    setcookie("sa21-username", "", time() - 3600, "/");
    setcookie("sa21-password", "", time() - 3600, "/");
}
