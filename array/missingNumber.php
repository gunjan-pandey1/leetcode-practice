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

//in built function
// function findMissingNumber($arr, $n) {
//     // Calculate expected sum using formula
//     $expectedSum = ($n * ($n + 1)) / 2;
    
//     // Calculate actual sum using array_sum
//     $actualSum = array_sum($arr);
    
//     // Return the difference
//     return $expectedSum - $actualSum;
// }

// // Example usage
// $arr = [1, 2, 4, 6, 3, 7, 8];
// $n = 8;
// echo "The missing number is: " . findMissingNumber($arr, $n); // Output: 5
/*
Time Complexity Analysis:
- O(n) where n is the size of the input array
- The algorithm uses a single loop to calculate arraySum
- The formula for totalSum is O(1)
- Subtraction operation is O(1)

Space Complexity Analysis: 
- O(1) constant space
- Only uses a few variables (totalSum, arraySum, missingNumber) 
- No additional data structures needed

Detailed Algorithm Explanation:
1. Calculate expected sum using formula n*(n+1)/2
   - Works because sum of first n natural numbers is n*(n+1)/2
   - Takes O(1) time
   
2. Calculate actual array sum using loop
   - Iterates through array once
   - Adds each element to running sum
   - Takes O(n) time
   
3. Find missing number by subtracting
   - Difference between expected and actual sum
   - Missing number must be this difference
   - Takes O(1) time

Overall efficient solution with linear time complexity
and constant space complexity
*/

?>
