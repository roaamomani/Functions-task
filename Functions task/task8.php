<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Function to remove duplicates from an array
function removeDuplicates($array) {
    // Use array_unique() to remove duplicates
    $uniqueArray = array_unique($array);
    
    // Use array_values() to reset array keys
    $uniqueArray = array_values($uniqueArray);
    
    return $uniqueArray;
}

// Sample input array
$array1 = array(2, 4, 7, 4, 8, 4);

// Remove duplicates
$array1 = removeDuplicates($array1);

// Print the output
echo "Expected Output: <br>";
print_r($array1);
?>

</body>
</html>