<?php

function reverseArray(&$arr) {
    $left = 0;
    $right = count($arr) - 1;

    while ($left < $right) {
        // Swap arr[left] and arr[right]
        $temp = $arr[$left];
        $arr[$left] = $arr[$right];
        $arr[$right] = $temp;

        // Move pointers
        $left++;
        $right--;
    }
}

// Test
$arr = [1, 2, 3];
reverseArray($arr);
print_r($arr);

?>
