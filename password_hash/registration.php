<?php
// Start the session
session_start();

// Database configuration
$host = 'localhost'; // Database host
$dbname = 'your_database_name'; // Database name
$user = 'your_database_username'; // Database user
$pass = 'your_database_password'; // Database password

// Create PDO instance for database connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL and bind parameters
    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashedPassword);

    try {
        $stmt->execute();
        echo "User registered successfully.";
    } catch(PDOException $e) {
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Register</button>
    </form>
</body>
</html>
