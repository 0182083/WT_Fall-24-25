<?php
$stringVar = "Hello, PHP!";
$intVar = 20;
$floatVar = 5.75;
$boolVar = true;

echo "Using var_dump():<br>";
var_dump($stringVar);
echo "<br>";
var_dump($intVar);
echo "<br>";
var_dump($floatVar);
echo "<br>";
var_dump($boolVar);
echo "<br><br>";

$addition = $intVar + $floatVar;
$subtraction = $intVar - $floatVar;
$multiplication = $intVar * $floatVar;
$division = $intVar / $floatVar;


echo "Addition: $addition<br>";
echo "Subtraction: $subtraction<br>";
echo "Multiplication: $multiplication<br>";
echo "Division: $division<br><br>";

$num1 = 15;
$num2 = 25;
$sum = $num1 + $num2;

echo "Sum using echo: $sum<br>";
print "Sum using print: $sum<br>";
?>