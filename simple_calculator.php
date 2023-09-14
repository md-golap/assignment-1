

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple calculator</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num1" placeholder="Enter first number">
        <select name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number">
        <input type="submit" value="Calculate">

    </form>
</body>
</html>

<?php

//Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. Provide input fields for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). Display the result of the chosen operation.

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            echo "The Result is : $result";
            break;
        case 'subtract':
            $result = $num1 - $num2;
            echo "The Result is : $result";
            break;
        case 'multiply':
            $result = $num1 * $num2;
            echo "The Result is : $result";
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
                echo "The Result is : $result";
            }else {
                echo "Please don't divide with ZERO";
            }
            break;
        default:
            echo "Not a Valid Operation";
            break;
    }
}

?>