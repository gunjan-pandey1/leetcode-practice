<?php

/**
 * Implements the QuickSort algorithm to sort an array in ascending order
 * 
 * @param array &$arr Reference to the array to be sorted
 * @param int $low Starting index of the partition
 * @param int|null $high Ending index of the partition
 * @return void
 */
function quickSort(array &$arr, int $low = 0, ?int $high = null): void {
    // Initialize high value for first call
    if (is_null($high)) {
        $high = count($arr) - 1;
    }

    // Base case: if low index is less than high index
    if ($low < $high) {
        // Get partition index and recursively sort sub-arrays
        $pi = partition($arr, $low, $high);
        quickSort($arr, $low, $pi - 1);  // Sort left partition
        quickSort($arr, $pi + 1, $high); // Sort right partition
    }
}

/**
 * Partitions the array around a pivot element
 * 
 * @param array &$arr Reference to the array
 * @param int $low Starting index of partition
 * @param int $high Ending index of partition
 * @return int Final position of the pivot element
 */
function partition(array &$arr, int $low, int $high): int {
    // Choose rightmost element as pivot
    $pivot = $arr[$high];
    
    // Index of smaller element
    $i = $low - 1;

    // Traverse through all elements
    for ($j = $low; $j < $high; $j++) {
        // If current element is smaller than or equal to pivot
        if ($arr[$j] <= $pivot) {
            $i++; // Increment index of smaller element
            // Swap elements
            [$arr[$i], $arr[$j]] = [$arr[$j], $arr[$i]];
        }
    }

    // Place pivot in its correct position
    [$arr[$i + 1], $arr[$high]] = [$arr[$high], $arr[$i + 1]];
    
    // Return the partition index
    return $i + 1;
}

// Example usage
$myArray = [64, 34, 25, 12, 22, 11, 90, 5];
quickSort($myArray);
echo "Sorted array: " . implode(', ', $myArray);
?>
