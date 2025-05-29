<?php

function isPalindrome($arr) {
    $left = 0;
    $right = count($arr) - 1;

    while ($left < $right) {
        if ($arr[$left] != $arr[$right]) {
            return false;
        }
        $left++;
        $right--;
    }

    return true;
}

// Test Cases
$arr1 = [1, 2, 3, 2, 1];
var_export(isPalindrome($arr1)); // true

$arr2 = [1, 2, 3, 4];
var_export(isPalindrome($arr2)); // false

?>
