<?php
//To add one year to the current year in PHP, you can use the date() function in combination with the strtotime() function. 
//The strtotime() function is particularly useful for modifying dates. Here's how you can do it:
// Get the current year
$currentYear = date("Y");

// Add one year to the current year
$nextYear = date("Y", strtotime("+1 year"));

// Display the current year and next year
echo "The current year is " . $currentYear . "<br>";
echo "Next year will be " . $nextYear;
?>
