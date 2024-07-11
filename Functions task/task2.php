<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

<?php

function reverseString($str) {
    $length = strlen($str);
    $reversed = '';
    
    
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i]; 
    }
    
    return $reversed;
}


$input = "remove";


echo "Sample Input: $input <br>";
echo "Expected Output: " . reverseString($input);
?>








    ?>
</body>
</html>