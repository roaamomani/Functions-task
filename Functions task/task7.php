<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Function to check if a string is a palindrome
function isPalindrome($str) {
    // Remove spaces and punctuation and convert to lowercase
    $str = preg_replace("/[^a-zA-Z]/", "", strtolower($str));
    
    // Reverse the string
    $reversed = strrev($str);
    
    // Compare the original string with the reversed string
    if ($str == $reversed) {
        return true; // It is a palindrome
    } else {
        return false; // It is not a palindrome
    }
}

// Sample input
$input = "Eva, can I see bees in a cave?";

// Check if the string is a palindrome and print the result
if (isPalindrome($input)) {
    echo "Yes it is a palindrome";
} else {
    echo "No it is not a palindrome";
}
?>


</body>
</html>