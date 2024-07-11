<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// Function to check if all characters in a string are lowercase
function isAllLowercase($str) {
    // Loop through each character in the string
    for ($i = 0; $i < strlen($str); $i++) {
        // Check if current character is not lowercase
        if ($str[$i] !== strtolower($str[$i])) {
            return false; // Return false if any character is not lowercase
        }
    }
    
    return true; 
}

// Sample input
$input = "remove";


if (isAllLowercase($input)) {
    echo "Sample Input: $input <br>";
    echo "Expected Output: Your String is Ok";
} else {
    echo "Sample Input: $input <br>";
    echo "Expected Output: Your String is not all lowercase";
}
?>
</body>
</html>