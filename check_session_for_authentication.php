<?php
session_start(); // Start the session

// Check if the session variable for user authentication is set and not empty
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    // The session variable is not set or empty, redirect to the login page
    header("Location: login.php");
    exit; // Prevent further execution of the script
}

// If the session variable is set, the rest of the page can be displayed to the user
// Place your page content here
echo "Welcome, you are authorized to view this page.";
?>
