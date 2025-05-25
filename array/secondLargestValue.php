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
echo getSecondLargest($arr); // Output: 34

//in built function

// function getSecondLargest($arr) {
//     // Remove duplicates and sort in descending order
//     $unique = array_unique($arr);
//     rsort($unique);
    
//     // Return the second element if it exists, otherwise -1
//     return $unique[1] ?? -1;
// }
?>
