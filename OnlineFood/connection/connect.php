<?php
$servername = "localhost"; // default MySQL server
$username = "root"; // username
$password = ""; // password
$dbname = "onlinefood";  // correct database name

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>