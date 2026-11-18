<?php
session_start();
$remember_me = $_POST["remember_me"];
$password = $_POST["password"];

if ($remember_me == "true") {
    setcookie("sa21-username", $_SESSION["sa21-user"]["username"], time() + (60 * 60 * 24 * 365));
    setcookie("sa21-password", $password, time() + (60 * 60 * 24 * 365));
} else {
    if (isset($_COOKIE["sa21-username"]) && isset($_COOKIE["sa21-password"])) {

        if (
            $_COOKIE["sa21-username"] == $_SESSION["sa21-user"]["username"] &&
            $_COOKIE["sa21-password"] == $password
        ) {
        } else {
            setcookie("sa21-username", "", -1);
            setcookie("sa21-password", "", -1);
        }
    } else {
        setcookie("sa21-username", "", -1);
        setcookie("sa21-password", "", -1);
    }
}