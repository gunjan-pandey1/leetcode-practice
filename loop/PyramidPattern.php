<?php
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    // Print leading spaces to center the stars
    for ($k = 1; $k <= ($rows - $i); $k++) {
        echo " ";
    }

    // Print the stars; the number of stars increases by 2 in each row
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }

    echo "\n";
}

/*
    *
   ***
  *****
 *******
*/

// Time Complexity Analysis:
// O(n^2) where n is the number of rows
// - Outer loop runs n times
// - For each row i, we have two inner loops:
//   1. First inner loop runs (n-i) times for spaces
//   2. Second inner loop runs (2i-1) times for stars
//   Total operations per row ≈ (n-i) + (2i-1)
//   Summing up for all rows gives us quadratic complexity

// Space Complexity Analysis: 
// O(1) - Constant space
// - Only using a fixed number of variables (i, j, k)
// - No additional data structures that grow with input
// - Output space not counted as per convention

// Detailed Explanation:
// Row 1: n-1 spaces + 1 star       = n operations
// Row 2: n-2 spaces + 3 stars      = n+1 operations
// Row 3: n-3 spaces + 5 stars      = n+2 operations
// ...and so on
// This forms an arithmetic sequence, summing to O(n^2)

?>