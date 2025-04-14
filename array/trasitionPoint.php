<?php

// Find the transition point in a binary array

// Given a sorted array containing only numbers 0 and 1, the task is to find the transition point efficiently. The transition point is the point where “0” ends and “1” begins.


function findTransitionPoint($arr) {
    // Step 1: Iterate through the array
    for ($i = 0; $i < count($arr); $i++) {
        // Step 2: If we find the first occurrence of 1, return its index
        if ($arr[$i] == 1) {
            return $i;
        }
    }

    // Step 3: If no 1 is found, return -1 (no transition point)
    return -1;
}

// Example inputs
$arr1 = [0, 0, 0, 1, 1];
$arr2 = [0, 0, 0, 0, 1, 1, 1, 1];
$arr3 = [0, 0, 0, 0, 0]; // No 1 in the array

// Function calls and output results
echo "Transition Point in arr1: " . findTransitionPoint($arr1) . "<br>";
echo "Transition Point in arr2: " . findTransitionPoint($arr2) . "<br>";
echo "Transition Point in arr3: " . findTransitionPoint($arr3) . "<br>";
?>
