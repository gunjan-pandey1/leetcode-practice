<?php
// ===========================================
// FIBONACCI WITHOUT BUILT-IN FUNCTIONS
// ===========================================
echo "Fibonacci without built-in functions:\n";

$prev2 = 0;
$prev1 = 1;

// Print first two numbers
echo $prev2 . PHP_EOL;
echo $prev1 . PHP_EOL;

// Print next 18 numbers (total 20 numbers)
for ($i = 0; $i < 18; $i++) {
    $newFibo = $prev1 + $prev2;
    echo $newFibo . PHP_EOL;
    $prev2 = $prev1;
    $prev1 = $newFibo;
}

echo "\n";

// ===========================================
// FIBONACCI USING ARRAY (WITHOUT GENERATORS)
// ===========================================
echo "Fibonacci using array:\n";

function fibonacciArray($n) {
    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

$fibNumbers = fibonacciArray(20);
foreach ($fibNumbers as $number) {
    echo $number . PHP_EOL;
}
?>