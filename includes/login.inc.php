<?php
if (isset($_POST["loginSubmit"])) {

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once '../dbconfig.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../loginPage.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
} else {
    header("location: ../loginPage.php");
    exit();
}
