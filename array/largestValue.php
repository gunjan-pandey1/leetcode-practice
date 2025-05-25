<?php
function getLargest($arr) {
    $largest = $arr[0]; // Assume first element is largest

    // Loop through array to find the maximum
    foreach ($arr as $num) {
        if ($num > $largest) {
            $largest = $num; // Update largest if a bigger number is found
        }
    }

    return $largest;
}

// Example usage
$arr = [12, 35, 1, 10, 34, 1];
echo getLargest($arr); // Output: 35
        
// in built function
    return max($arr);

?>
