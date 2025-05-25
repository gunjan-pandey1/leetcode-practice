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
/*
Time Complexity: O(n)
- The algorithm uses a single for loop that iterates n times (18 times in this case)
- Each iteration performs constant time operations (addition and assignment)
- Therefore, the time complexity grows linearly with the input size n

Space Complexity: O(1) 
- The algorithm uses only three variables ($prev2, $prev1, $newFibo) regardless of input size
- These variables take constant space
- No additional data structures are used that grow with input size

Detailed Explanation:
1. Initialize two variables $prev2=0 and $prev1=1 for first two Fibonacci numbers
2. For each iteration:
   - Calculate new Fibonacci number by adding previous two numbers
   - Update $prev2 and $prev1 for next iteration
   - Print the calculated number
3. The process continues for specified number of iterations (18)
4. Since we only store 3 numbers at any time, space remains constant
5. Each operation (addition, assignment, printing) takes constant time
6. Total time increases linearly with number of iterations
*/

?>