<?php
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    // Print leading spaces
    for ($k = 1; $k <= ($rows - $i); $k++) {
        echo " ";
    }
    // Print the stars
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}

/*
    output:
    *
   **
  ***
 ****
*****
*/

// Time Complexity Analysis:
// O(n^2) where n is the number of rows
// - Outer loop runs n times
// - For each i, inner loops run (n-i) + i = n times combined
// - Total iterations = n + (n-1) + (n-2) + ... + 1 ≈ n^2/2
//
// Space Complexity Analysis: 
// O(1) - Constant space
// - Only using fixed variables (i, j, k) regardless of input size
// - Output space not counted as per convention
//
// Detailed Breakdown:
// 1. First loop (i): Iterates rows times (n iterations)
// 2. For each i:
//    - Space loop (k): Prints (rows-i) spaces
//    - Star loop (j): Prints i stars
// 3. Each row operation: O(n) work
// 4. Total: O(n) rows × O(n) work per row = O(n^2)

?>