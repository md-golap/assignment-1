<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>even_odd_checker</title>
</head> 
<body>
    <form action="" method="post">
        <input type="number" name="number">
        <input type="submit" value="Check">
    </form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $number = $_POST["number"];
    if ($number % 2 == 0) {
        echo "$number is even.";
    } else {
        echo "$number is odd.";
    }
    
}
?>