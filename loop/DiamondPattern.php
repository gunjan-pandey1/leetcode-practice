<?php
$rows = 5;

// Upper part of the diamond
for ($i = 1; $i <= $rows; $i++) {
    for ($k = 1; $k <= ($rows - $i); $k++) {
        echo " ";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "\n";
}

// Lower part of the diamond
for ($i = $rows - 1; $i >= 1; $i--) {
    for ($k = 1; $k <= ($rows - $i); $k++) {
        echo " ";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "\n";
}

// Output:
//     *
//    ***
//   *****
//  *******
// *********
//  *******
//   *****
//    ***
//     *

// Time Complexity Analysis:
// - Upper part: O(n^2)
//   - Outer loop runs n times
//   - For each i, we have two inner loops:
//     - First inner loop runs (n-i) times for spaces
//     - Second inner loop runs (2i-1) times for stars
//   - Total operations: Σ(n-i) + Σ(2i-1) where i goes from 1 to n
//
// - Lower part: O(n^2) 
//   - Similar to upper part but in reverse
//   - Outer loop runs (n-1) times
//   - Same inner loop patterns
//
// Overall Time Complexity: O(n^2)
// where n is the number of rows (in this case 5)

// Space Complexity Analysis:
// - O(1) - Constant space
// - Only using a fixed number of variables (i, j, k, rows)
// - No additional data structures that grow with input
// - Output space not considered as per standard practice

// Detailed Explanation:
// 1. For each row i in upper part (1 to n):
//    - Print (n-i) spaces: Creates left alignment
//    - Print (2i-1) stars: Creates expanding pattern
//    - Example for n=5:
//      Row 1: 4 spaces + 1 star
//      Row 2: 3 spaces + 3 stars
//      Row 3: 2 spaces + 5 stars
//      Row 4: 1 space + 7 stars
//      Row 5: 0 spaces + 9 stars
//
// 2. For each row i in lower part (n-1 to 1):
//    - Mirror image of upper part
//    - Same space and star patterns in reverse
//    - Creates symmetrical bottom half

?>