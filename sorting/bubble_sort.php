<?php
/*
 * Bubble sort is a simple sorting algorithm that repeatedly steps through the list, compares adjacent elements, and swaps them if they are in the wrong order. The pass through the list is repeated until no swaps are needed, which indicates that the list is sorted.
 *
 * Time complexity: O(n^2)
 * Space complexity: O(1)
 */
function bubbleSortArray($nums) {
    // Handle empty or single element array
    if (empty($nums) || count($nums) === 1) {
        return $nums;
    }

    $n = count($nums);
    $swapped = true;

    // Optimization: Stop if no swaps occurred in a pass
    while ($swapped) {
        $swapped = false;
        for ($j = 0; $j < $n - 1; $j++) {
            if ($nums[$j] > $nums[$j + 1]) {
                // Swap elements
                [$nums[$j], $nums[$j + 1]] = [$nums[$j + 1], $nums[$j]];
                $swapped = true;
            }
        }
        // After each pass, the largest element is at the end
        $n--;
    }
    
    return $nums;
}

// Example
print_r(bubbleSortArray([5, 2, 3, 1]));
