<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdesignproject";

// Lidhja me bazën e të dhënave
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrolloni lidhjen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Funksioni për të pastruar dhe siguruar inputet e përdoruesit
function sanitizeInput($input)
{
    return htmlspecialchars(stripslashes(trim($input)));
}

// Funksioni për të regjistruar një përdorues të ri
function registerUser($username, $password, $email, $role)
{
    global $conn;

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $hashedPassword, $role);
    
    // Kontrolloni dhe ekzekutoni query-n
    if ($stmt->execute()) {
        $stmt->close();
        return true;
    } else {
        return false;
    }
}

// Funksioni për të identifikuar një përdorues
function loginUser($username, $password)
{
    global $conn;

    $stmt = $conn->prepare("SELECT id, password, role FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        if (password_verify($password, $hashedPassword)) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $username;
            $_SESSION['role'] = ($row['role'] == 'admin') ? 1 : 0;
            return true;
        }
    }

    return false;
}

// Funksioni për të shkyçur një përdorues
function logoutUser()
{
    session_destroy();
}
?>
