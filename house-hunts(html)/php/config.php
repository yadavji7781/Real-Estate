<?php
// Database connection settings
$host = "localhost";
$username = "root";
$password = "";
$database = "house-hunts";

// Create connection
$con = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
