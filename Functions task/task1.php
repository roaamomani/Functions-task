<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


// Function to check if a number is prime
function isPrime($number) {
   
    if ($number <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    
    return true; 
}

if (isset($_POST['number'])) {
    $inputNumber = $_POST['number'];
    
    
    if (filter_var($inputNumber, FILTER_VALIDATE_INT) === false || $inputNumber <= 0) {
        echo "Please enter a valid positive integer.";
    } else {
    
        $number = intval($inputNumber);
        
    
        if (isPrime($number)) {
            echo "$number is a prime number.";
        } else {
            echo "$number is not a prime number.";
        }
    }
}
?>

<form method="post" action="">
    Enter a number: <input type="text" name="number">
    <input type="submit" value="Check Prime">
</form>
</body>
</html>