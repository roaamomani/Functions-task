<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Function to swap two variables
function swapVariables(&$x, &$y) {
    // Temporary variable to hold the value of $x
    $temp = $x;
    // Assign $y value to $x
    $x = $y;
    // Assign temporary value (initial $x) to $y
    $y = $temp;
}

// Sample input variables
$x = 12;
$y = 10;

// Output before swapping
echo "Before swapping: x = $x, y = $y <br>";

// Call the function to swap variables
swapVariables($x, $y);

// Output after swapping
echo "After swapping: x = $x, y = $y";
?>
</body>
</html>