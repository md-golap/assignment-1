<!-- <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    
</head>
<body>

    <form action="" method="POST">
        <label for="number1">Number:1</label>
        <input type="number" name="number1" placeholder="Number:1"><br><br>
        <label for="number2">Number:2</label>
        <input type="number" name="number2" placeholder="Number:2"><br><br>
        <button>Calculator</button>

    </form>


    <!-- <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $num1 = $_POST["number1"];
            $num2 = $_POST["number2"];

            if($num1 == $num2){
                echo "Both are same number";
            }
        }
    
    ?> -->
    
</body>
</html> 






<?php

// define("PI",3.1416);

// $number = 3*3.1416;
// echo $number;


// $marks=70;

// if($marks > 60 && $marks < 80){
//     echo "pass";
// } else{
//     echo "Failed";
// }


// $number1 = 12;
// $number2 = 443;
// $number3 = 55;

// $max = $number1;

// if($number2 > $max){
//     $max = $number2;
// }

// if($number3 > $max){
//     $max = $number3;
// }

// echo $max;

// ?>



<!-- // Cpmparison oparetor

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="number1" placeholder="Number:1"><br><br>
        <input type="number" name="number2" placeholder="Number:2"><br><br>
        <button>Calculator</button>
    </form>
</body>
</html>

<!-- <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        if($number1 == $number2){
            echo "Both are same";
        }elseif($number1 > $number2){
            echo "$number1 is greater";
        }elseif($number1 < $number2){
            echo "$number2 is greater";
        }

    }



?> -->



<!-- <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="number1" placeholder="Number:1"><br><br>
        <button>Calculator</button>

    </form>
</body>
</html> -->



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grate Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    <form action="" method="POST">
        <label for="text1"> Task 1: Mark </label>
        <input type="number" name="text1" id="text1" required><br><br>

        <label for="text2">Task 2: Mark </label>
        <input type="number" name="text2" id="text2" required><br><br>

        <label for="text3">Task 3: Mark </label>
        <input type="number" name="text3" id="text3" required><br><br>
        <input type="submit" value="calculate">

    </form>
</body>
</html>

<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $text1 = $_POST["text1"];
    $text2 = $_POST["text2"];
    $text3 = $_POST["text3"];

    $avarage = ($text1+$text2+$text3)/3;

    if($avarage >= 80 && $avarage <= 100){
        $grate = 'A+';
    }elseif ($avarage >= 70 && $avarage  <= 79){
        $grate = 'A';
   }elseif ($avarage >= 60 && $avarage <= 69){
        $grate = 'A-';
   }elseif ($avarage >= 50 && $avarage <= 59){
        $grate ='B';
   }elseif ( $avarage >= 40 && $avarage <= 49){
        $grate ='c';
   }elseif ( $avarage >= 33 && $avarage <= 39){
        $grate ='D';
   }elseif ( $avarage >= 32 && $avarage <= 0){
        $grate ='F';
   }else{
        echo "Invaild result";
   }

        echo "<p>Average Score: $avarage</p>";
        echo "<p>Grade: $grate</p>";
  }

?> --> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="num1" placeholder="Enter Your Fast Number">
        <select name="oparetion" id="">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="Multiply">Multiplication</option>
            <option value="divite">Dvition</option>
        </select>

        <input type="number" name="num2" placeholder="Enter Your Scound Number">
        <input type="submit" value="Calculate">

    </form>
</body>
</html>


<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $number1 = $_POST['num1'];
        $number2 = $_POST['num2'];
        $oparetion = $_POST['oparetion'];
        
        switch ($oparetion){
            case 'add':
                $result = $number1 + $number2;
                echo "This result is: $result";
                break;

            case 'subtract':
                $result = $number1 - $number2;
                echo "This result is: $result";
                break; 
                
            case 'Multiply':
                $result = $number1 * $number2;
                echo "This result is: $result";
                break;  
                
            case 'divite':
                
                if($number2 != 0){

                    $result = $number1 / $number2;
                    echo "This result is: $result";
                }else{
                    echo "Please do not divete with zero";
                }
                break;
                default:
                echo "Invalid number";

                break;

        }
    }




?>




