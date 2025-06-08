<?php

// Function to rotate an array to the left by d positions
function leftRotate(&$arr, $d, $n) {
    for ($i = 0; $i < $d; $i++) {
        // Store the first element
        $first = $arr[0];

        // Shift all elements one position to the left
        for ($j = 0; $j < $n; $j++) {
            $arr[$j] = $arr[$j + 1];
        }

        // Put the first element at the end
        $arr[$n - 1] = $first;
    }
}

// Example usage
$arr = [1, 2, 3, 4, 5, 6];
$d = 2; // Number of positions to rotate
$n = count($arr) - 1;

leftRotate($arr, $d, $n);

// Print the rotated array
echo "Rotated array: ";
foreach ($arr as $value) {
    echo $value . " ";
}
?>
