<?php
function SelectionSortArray($arr) {
    // Handle edge cases
    if (empty($arr)) {
        return [];
    }
    
    if (count($arr) === 1) {
        return $arr;
    }
    
    $n = count($arr);
    
    // Check if array is already sorted
    $isSorted = true;
    for ($i = 0; $i < $n - 1; $i++) {
        if ($arr[$i] > $arr[$i + 1]) {
            $isSorted = false;
            break;
        }
    }
    if ($isSorted) {
        return $arr;
    }
    
    for ($i = 0; $i < $n - 1; $i++) {
        // Assume the current position holds the minimum element
        $min_idx = $i;

        // Iterate through the unsorted portion to find the actual minimum
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$min_idx]) {
                // Update min_idx if a smaller element is found
                $min_idx = $j;
            }
        }

        // Skip swap if minimum element is already in position
        if ($min_idx !== $i) {
            // Swap using PHP's list() for better readability and performance
            list($arr[$i], $arr[$min_idx]) = array($arr[$min_idx], $arr[$i]);
        }
    }
    return $arr;
}

// Example
print_r(SelectionSortArray([5, 2, 3, 1]));

?>
