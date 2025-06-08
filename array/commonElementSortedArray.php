<?php
//Find common elements in three sorted arrays
// Given three sorted arrays in non-decreasing order, print all common elements in these arrays.

// Note: In case of duplicate common elements, print only once.

function findCommonElementsOptimized($A, $B, $C) {
    // Pre-calculate array sizes to avoid multiple count() calls
    $lenA = count($A);
    $lenB = count($B);
    $lenC = count($C);

    $i = 0; // Pointer for A[]
    $j = 0; // Pointer for B[]
    $k = 0; // Pointer for C[]

    $common = [];   // Array to store common elements
    $lastCommon = null; // To ensure we add each common element only once

    // Iterate while pointers are within the bounds of all arrays
    while ($i < $lenA && $j < $lenB && $k < $lenC) {
        // If all three elements are equal
        if ($A[$i] == $B[$j] && $B[$j] == $C[$k]) {
            // Check if this common element was not already added
            if ($lastCommon !== $A[$i]) {
                $common[] = $A[$i]; // Add the common element
                $lastCommon = $A[$i];
            }
            // Move all pointers forward
            $i++;
            $j++;
            $k++;
        }
        // Else, move the pointer which points to the smallest element
        else if ($A[$i] < $B[$j]) {
            $i++;
        } 
        else if ($B[$j] < $C[$k]) {
            $j++;
        } 
        else {
            $k++;
        }
    }

    // Output the common elements
    echo implode(" ", $common) . "\n";
}

// Example inputs
$A1 = [1, 5, 10, 20, 30];
$B1 = [5, 13, 15, 20];
$C1 = [5, 20];

$A2 = [2, 5, 10, 30];
$B2 = [5, 20, 34];
$C2 = [5, 13, 19];

// Function calls
echo "Common elements in first set: ";
findCommonElementsOptimized($A1, $B1, $C1);

echo "Common elements in second set: ";
findCommonElementsOptimized($A2, $B2, $C2);

/*
Time Complexity Analysis:
O(n) where n is the length of the smallest array among A, B, and C
- The algorithm uses three pointers (i, j, k) and iterates through the arrays once
- In each iteration, at least one pointer moves forward
- The maximum number of iterations is bounded by the length of the smallest array
- All other operations (array access, comparisons) are O(1)

Space Complexity Analysis: 
O(m) where m is the number of common elements found across all three arrays
- We use an additional array 'common' to store common elements
- In worst case, all elements could be common (when all arrays are identical)
- We also use constant extra space for:
  - Three pointers (i, j, k)
  - Length variables (lenA, lenB, lenC)
  - lastCommon variable

Detailed Step-by-Step Explanation:
1. Initialize pointers i, j, k at the start of arrays A, B, C respectively
2. While all pointers are within bounds:
   a. If A[i] = B[j] = C[k]:
      - Found a common element
      - Check if not duplicate using lastCommon
      - Add to result array if unique
      - Move all pointers forward
   b. If not equal:
      - Find smallest value among A[i], B[j], C[k]
      - Move pointer of array with smallest value
3. Continue until any pointer reaches end of its array
4. Print common elements found

The algorithm is efficient because:
- Single pass through arrays
- No backtracking needed
- Handles duplicates without extra space
- Takes advantage of sorted nature of input arrays
*/

?>
