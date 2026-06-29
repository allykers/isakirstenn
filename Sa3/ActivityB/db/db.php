<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "activityb_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
    die("Database Connection Failed.");
}

?>