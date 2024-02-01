<?php

// Check if the User Agent contains 'Googlebot'
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Googlebot') !== false) {
    // Set HTTP response code to 410 Gone
    header("HTTP/1.1 410 Gone");
    echo "Page not available for Googlebot";
    exit();
}

// Your regular code for other visitors
echo "Welcome to my website";

?>
