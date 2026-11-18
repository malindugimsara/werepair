<?php
session_start();
if (isset($_SESSION["sa21-user"])) {

    setcookie("sa21-username", "", -1);
    setcookie("sa21-password", "", -1);

    $_SESSION["sa21-user"] = null;
    session_destroy();
    echo "Success";
}
