<?php

//use a variable to store the temperature. Depending on the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm."
$tempreature = 0;

if ($tempreature < 1) {
    echo "It's freezing!";
}else if ($tempreature >= 0 && $tempreature < 15) {
    echo "It's cool.";
}else if ($tempreature >= 15 && $tempreature < 25) {
    echo "It's warm.";
}else {
    echo "It's hot!";
}