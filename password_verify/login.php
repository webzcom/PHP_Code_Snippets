<?php
// Include database connection code here
$dbHost = 'localhost';
$dbName = 'your_database';
$dbUsername = 'your_username';
$dbPassword = 'your_password';

$pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve user from database
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verify the password
    if ($user && password_verify($password, $user['password'])) {
        echo "Login successful!";
        // Proceed with login logic (e.g., setting session variables)
    } else {
        echo "Login failed!";
    }
}
?>

<form action="" method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
