<?php
session_start(); // Start the session at the very beginning

// Example credentials for demonstration purposes
$valid_username = 'admin';
$valid_password = 'password';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful, set session variable
        $_SESSION['user'] = $username;
        $_SESSION['authenticated'] = true;

        // Redirect to a protected page or dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password!";
        // Optionally, redirect back to the login form or display an error message
    }
}
?>
