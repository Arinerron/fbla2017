<?php
include_once "../includes/functions.php";

if(isLoggedIn()) {
    setcookie('email', $_SESSION['email']);

    logout();

    sec_session_start();
}

include_once "login.php";
?>
