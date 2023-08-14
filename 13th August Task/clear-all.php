<?php

include_once('dbh-inc.php');
session_start();

$admin_password = 0000;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST["password"] == $admin_password) {
        $sql = "TRUNCATE TABLE Products";

        $result = mysqli_query($db_connection, $sql);

        if ($result) {
            $_SESSION["wrongPassword"] = '';
            header("Location: page.php");
        } else {
            echo "Failed to Update product" . "<br>";
            exit();
        }
    }
    else {
        $_SESSION["wrongPassword"] = "WRONG PASSWORD";
        header("Location: page.php");
    }
}
