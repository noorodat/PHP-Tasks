<?php

$server_name = "localhost";
$db_username = "root"; // Default value
$db_password = ""; // Default value
$db_name = "shop";


$db_connection = new mysqli($server_name, $db_username, $db_password, $db_name);

if($db_connection->connect_errno) {
    echo "Failed to connect" . "<br>";
    exit();
}


