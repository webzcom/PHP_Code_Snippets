<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

try {
    // Create a PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare a parameterized SQL statement
    $stmt = $conn->prepare("SELECT * FROM your_table WHERE id = :id");
    
    // Bind parameters to the prepared statement
    $stmt->bindParam(':id', $id);

    // Assign values to parameters and execute
    $id = 1; // example value
    $stmt->execute();

    // Fetch results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row) {
        // Process each row
        print_r($row);
    }
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
