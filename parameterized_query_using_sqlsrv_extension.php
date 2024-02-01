<?php
$serverName = "your_server_name"; // For example, "localhost\SQLEXPRESS"
$connectionOptions = array(
    "Database" => "your_database_name",
    "Uid" => "your_username",
    "PWD" => "your_password"
);

// Connect to SQL Server
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

// SQL query with parameter placeholders
$sql = "SELECT * FROM your_table WHERE id = ?";

// Parameters to bind
$params = array(1); // Example parameter

// Prepare statement
$stmt = sqlsrv_prepare($conn, $sql, $params);

if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Execute statement
if (sqlsrv_execute($stmt)) {
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        // Process each row
        print_r($row);
    }
} else {
    die(print_r(sqlsrv_errors(), true));
}

// Close the statement and connection
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>
