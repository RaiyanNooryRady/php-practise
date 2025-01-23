<?php
echo "Results: <br>";
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
if (! is_numeric($num1) || ! is_numeric($num2)) {
    echo "Please enter valid numbers";
}
$add = $num1 + $num2;
$sub = $num1 - $num2;
$mul = $num1 * $num2;
echo "Addition: " . $add . "<br>";
echo "Subtraction: " . $sub . "<br>";
echo "Multiplication: " . $mul . "<br>";
if ($num2 != 0) {
    $div = $num1 / $num2;
    echo "Division: " . $div . "<br>";
    $mod = $num1 % $num2;
    echo "Modulus: ". $mod . "<br>";
} else {
    echo "Division: ". "Cannot divide by zero!" . "<br>";
    echo "Modulus: ". "Modulus not found because a number cannot be divided by zero!" . "<br>";
}
