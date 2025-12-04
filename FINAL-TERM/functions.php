<?php
function sum($a, $b) {
    return $a + $b;
}
 
echo "Sum of 5 and 3: " . sum(5, 3) . "<br>";
echo "Sum of 10 and 20: " . sum(10, 20) . "<br><br>";
function factorial($n) {
    if ($n == 0) {
        return 1; 
    } else {
        return $n * factorial($n - 1); 
    }
}
 
echo "Factorial of 5: " . factorial(5) . "<br>";
echo "Factorial of 6: " . factorial(6) . "<br><br>";
 
function is_prime($n) {
    if ($n <= 1) {
        return false; 
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
 
echo "Is 7 prime? " . (is_prime(7) ? "Yes" : "No") . "<br>";
echo "Is 10 prime? " . (is_prime(10) ? "Yes" : "No") . "<br>";
echo "Is 13 prime? " . (is_prime(13) ? "Yes" : "No") . "<br>";
?>