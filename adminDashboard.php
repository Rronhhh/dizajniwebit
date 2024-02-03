<?php
session_start();
include('config.php');

if (isset($_SESSION['user_id']) && $_SESSION['is_admin'] == 1) {
    // Admin is logged in, include admin-specific content here
    echo "Welcome Admin!";
} else {
    // Redirect to login page if the user is not logged in or is not an admin
    header('Location: loginRegister.php');
    exit();
}
?>