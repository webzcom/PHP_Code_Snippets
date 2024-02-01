<?php

// Get the host name from the current request
$hostName = $_SERVER['HTTP_HOST'];

// Check if the host name matches a specific value and redirect
switch ($hostName) {
    case "www.example.com":
        // Redirect to a specific URL for this host
        header("Location: https://www.specific-url-for-example.com");
        exit; // Make sure no further code is executed after redirection

    case "test.example.com":
        // Redirect to a different URL for this host
        header("Location: https://www.specific-url-for-test.com");
        exit; // Make sure no further code is executed after redirection

    default:
        // Optionally handle any unrecognized hosts
        // header("Location: https://www.default-url.com");
        // exit; // Make sure no further code is executed after redirection
        // If you comment out the above lines, no redirection occurs for unrecognized hosts
        break;
}

// If the script continues, it means no redirection occurred
// You can add additional logic here if needed

?>
