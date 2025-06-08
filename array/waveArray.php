<?php

function convertToWave(&$arr) {
    $n = count($arr);

    // Traverse all even indexed elements
    for ($i = 0; $i < $n; $i += 2) {
        // If current even index is smaller than previous
        if ($i > 0 && $arr[$i] < $arr[$i - 1]) {
            swap($arr, $i, $i - 1);
        }

        // If current even index is smaller than next
        if ($i < $n - 1 && $arr[$i] < $arr[$i + 1]) {
            swap($arr, $i, $i + 1);
        }
    }
}

function swap(&$arr, $i, $j) {
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
}

// Example 1
$arr1 = [10, 5, 6, 3, 2, 20, 100, 80];
convertToWave($arr1);
echo "Wave Array 1: " . implode(", ", $arr1) . "\n";

// Example 2
$arr2 = [20, 10, 8, 6, 4, 2];
convertToWave($arr2);
echo "Wave Array 2: " . implode(", ", $arr2) . "\n";

?>
