<?php

echo "For Loop (1 to 20):<br>";
for ($i = 1; $i <= 20; $i++) {
    echo $i . " ";
}
echo "<br><br>";
 
echo "While Loop (Even numbers 1 to 20):<br>";
$j = 1;
while ($j <= 20) {
    if ($j % 2 == 0) {
        echo $j . " ";
    }
    $j++;
}
echo "<br><br>";
 
$fruits = [
    "apple" => "red",
    "banana" => "yellow",
    "grape"  => "purple",
    "orange" => "orange"
];
 
echo "Foreach Loop (Fruits and Colors):<br>";
foreach ($fruits as $fruit => $color) {
    echo ucfirst($fruit) . " is " . $color . "<br>";
}
 
echo "<br>";

echo "For Loop with Break (Print only first 5 numbers):<br>";
for ($k = 1; $k <= 20; $k++) {
    if ($k > 5) {
        break;
    }
    echo $k . " ";
}
?>