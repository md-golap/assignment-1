
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comparison</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post" class="mt-4 container">
        <div class="mb-4">
            <div class="mb-4">
                <label for="number1" class="block text-gray-700 text-sm font-bold mb-2">Number 1:</label>
                <input name="number1" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" type="number" placeholder="Input Your First Number" required>
            </div>
            <div class="mb-4">
                <label for="number2" class="block text-gray-700 text-sm font-bold mb-2">Number 2:</label>
                <input type="number" name="number2" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Input Your Second Number" required>
            </div>
            <button class="btn btn-primary">Calculate</button>
    </form>
    
</body>
</html>

<?php

//Create a form where the user can input two numbers. Use the ternary operator to determine the larger number and display the result.

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    $largNum = ($num1 == $num2) ? "Both are same Number" : (($num1 > $num2) ? "$num1 is Larger" : "$num2 is Larger");
    echo $largNum;
}

?>