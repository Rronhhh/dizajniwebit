<?php
// config.php

$servername = "127.0.0.1";  // or "127.0.0.1" for local server
$username = "root";         // your MySQL username
$password = ""; // your MySQL password
$dbname = "webdesignproject";   // the name of your MySQL database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>