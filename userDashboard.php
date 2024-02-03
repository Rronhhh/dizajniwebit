<?php
session_start(); // Start the session at the beginning
include './backend.php.php'; // Replace with the correct path
include('config.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: loginRegister.php');
    exit();
}

// Other user-specific code...

// Logout functionality
if (isset($_POST['logout'])) {
    logoutUser();
}
?>