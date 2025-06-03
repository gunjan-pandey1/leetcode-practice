<?php

function reverseInGroups(&$arr, $k) {
    $n = count($arr);
    
    for ($i = 0; $i < $n; $i += $k) {
        $left = $i;
        $right = min($i + $k - 1, $n - 1);

        while ($left < $right) {
            // Swap elements
            $temp = $arr[$left];
            $arr[$left] = $arr[$right];
            $arr[$right] = $temp;

            $left++;
            $right--;
        }
    }
}

// Test the function
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$k = 3;

reverseInGroups($arr, $k);

// Print the modified array
echo implode(" ", $arr);
