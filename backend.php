<?php
include('config.php');
function sanitizeInput($input) {
    return htmlspecialchars(stripslashes(trim($input)));
}

function registerUser($username, $password) {
    global $conn;

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashedPassword);
    $stmt->execute();
    $stmt->close();
}

function loginUser($username, $password) {
    global $conn;

    $stmt = $conn->prepare("SELECT id, password, is_admin FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashedPassword, $isAdmin);
        $stmt->fetch();

        if (password_verify($password, $hashedPassword)) {
            // Password is correct, start session
            session_start();
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            $_SESSION['is_admin'] = $isAdmin;
            return true;
        }
    }

    $stmt->close();
    return false;
}

function logoutUser() {
    session_start();
    session_destroy();
}

?>