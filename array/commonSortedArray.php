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
?>
