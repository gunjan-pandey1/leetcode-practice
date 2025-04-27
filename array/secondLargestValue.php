<?php
function getSecondLargest($arr) {
    $n = count($arr);

    // Sort the array in ascending order
    sort($arr);

    // Start from second last element (as last is the largest)
    for ($i = $n - 2; $i >= 0; $i--) {
        // Return the first element that is not equal to the largest element
        if ($arr[$i] != $arr[$n - 1]) {
            return $arr[$i];
        }
    }

    // If no second largest element was found, return -1
    return -1;
}

// Example usage
$arr = [12, 35, 1, 10, 34, 1];
echo getSecondLargest($arr);

// Time Complexity Analysis:
// 1. sort() function: O(n log n) - PHP uses quicksort internally
// 2. For loop iteration: O(n) in worst case
// Overall Time Complexity: O(n log n) dominated by the sorting

// Space Complexity Analysis: 
// 1. sort() creates a temporary copy: O(n)
// 2. Other variables (n, i) use constant space: O(1)
// Overall Space Complexity: O(n)

// Detailed Explanation:
// 1. First, we count array elements: O(1)
// 2. sort() function:
//    - Uses quicksort algorithm
//    - Requires O(n log n) comparisons
//    - Creates temporary array copy using O(n) space
// 3. For loop:
//    - Starts from second last element
//    - Worst case traverses entire array if all elements are same
//    - Each iteration is O(1)
//    - Total loop complexity: O(n)
// 4. Return statement: O(1)

?>
