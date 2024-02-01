<?php
// Connection information
$serverName = "your_server_name"; // Update with your server name
$connectionOptions = array(
    "Database" => "your_database_name", // Update with your database name
    "Uid" => "your_username", // Update with your username
    "PWD" => "your_password" // Update with your password
);

// Connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

echo "Connected successfully.";

// Sample query
$sql = "SELECT * FROM your_table_name"; // Update with your table name
$stmt = sqlsrv_query($conn, $sql);

if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Fetch data
while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    echo $row['your_column_name']; // Update with your column name
}

// Close the connection
sqlsrv_close($conn);
?>
