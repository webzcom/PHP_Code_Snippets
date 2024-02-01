<?php

// Get the host name from the current request
$hostName = $_SERVER['HTTP_HOST'];

// Check if the host name matches a specific value
if ($hostName == "www.example.com") {
    // Perform action or load value for this specific host
    echo "The page is loaded from www.example.com";
} elseif ($hostName == "test.example.com") {
    // Perform action or load value for another specific host
    echo "The page is loaded from test.example.com";
} else {
    // Default action or value if the host does not match any specific ones
    echo "The page is loaded from an unrecognized host";
}

?>
