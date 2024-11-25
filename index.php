<?php
//Name variable
$name = "Abdulsalam";

//const for PI
define("PI","3.14159");

//To determine present hour for user greetings
$currentHour = date("H");

//Greeting the user with the name
if($currentHour < 12) {
    echo "Good Morning, $name!<br>";
}elseif ($currentHour < 17) {
    echo "Good Afternoon, $name!<br>";
} else {
    echo "Good Evening, $name!<br>";
}


//Number variables for math
$num1 = 10;
$num2 = 5;
$operator = "+";


//Math operations
$result = null;
if ($operator == "+") {
    $result = $num1 + $num2;
    echo "$num1 + $num2 = $result<br>";
} elseif ($operator == "-") {
    $result = $num1 - $num2;
    echo "$num1 - $num2 = $result<br>";
} elseif ($operator == "*") {
    $result = $num1 * $num2;
    echo "$num1 * $num2 = $result<br>";
} elseif ($operator == "/") {
    if ($num2 != 0) {
        $result = $num1 / $num2;
        echo "$num1 / $num2 = $result<br>";
    } else {
        echo "Error: Division by zero is not allowed.<br>";
    }
} else {
    echo "Invalid operator.<br>";
}

//display the value of PI
echo "The value of PI is: " . PI . "<br>";

//display current file name
echo "This script is located in " . __FILE__ . "";

   // Cast to float and integer
    $num1Float = (float)$num1; 
    $num2Float = (float)$num2; 
    $num1Int = (int)$num1; 
    $num2Int = (int)$num2; 

    // Display casted values
    echo "num1 (float): ";
    var_dump($num1Float);
    echo "<br>num1 (int): ";
    var_dump($num1Int);
    echo "<br>num2 (float): ";
    var_dump($num2Float);
    echo "<br>num2 (int): ";
    var_dump($num2Int);
