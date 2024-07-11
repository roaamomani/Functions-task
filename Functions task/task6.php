<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Function to check if a number is an Armstrong number
function isArmstrong($number) {
    // Convert number to string to iterate through each digit
    $numStr = (string) $number;
    $numDigits = strlen($numStr);
    $sum = 0;
    
    // Calculate the sum of cubes of its digits
    for ($i = 0; $i < $numDigits; $i++) {
        $digit = (int) $numStr[$i];
        $sum += $digit ** $numDigits;
    }
    
    // Check if the sum is equal to the original number
    if ($sum == $number) {
        return true; // It is an Armstrong number
    } else {
        return false; // It is not an Armstrong number
    }
}

// Sample input
$number = 407;

// Check if the number is an Armstrong number and print the result
if (isArmstrong($number)) {
    echo "$number is Armstrong Number";
} else {
    echo "$number is not Armstrong Number";
}
?>


</body>
</html>