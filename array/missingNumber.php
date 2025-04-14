<?php
function findMissingNumber($arr, $n) {
    // Step 1: Calculate the expected sum of first n natural numbers
    $totalSum = ($n * ($n + 1)) / 2;

    // Step 2: Calculate the sum of elements in the array using a loop
    $arraySum = 0; // Initialize sum to 0
    for ($i = 0; $i < count($arr); $i++) {
        $arraySum += $arr[$i]; // Add each element to arraySum
    }

    // Step 3: Find the missing number
    $missingNumber = $totalSum - $arraySum;

    // Return the missing number
    return $missingNumber;
}

// Example input
$arr = [1, 2, 4, 6, 3, 7, 8];
$n = 8; // The highest number in the range

// Function call and output result
echo "The missing number is: " . findMissingNumber($arr, $n);
?>
