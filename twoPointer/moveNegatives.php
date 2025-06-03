<?php

function moveNegatives(&$arr) {
    $left = 0;
    $right = count($arr) - 1;

    while ($left < $right) {
        // If left element is negative, move left pointer
        if ($arr[$left] < 0) {
            $left++;
        }
        // If right element is positive, move right pointer
        else if ($arr[$right] > 0) {
            $right--;
        }
        // Else swap
        else {
            $temp = $arr[$left];
            $arr[$left] = $arr[$right];
            $arr[$right] = $temp;
            $left++;
            $right--;
        }
    }
}

// Test Case
$arr = [1, -2, 3, -4, 5];
moveNegatives($arr);
print_r($arr);

?>
