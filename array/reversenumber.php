<?php
$arr = [1,2,3];

$left = 0;

$right = count($arr) - 1;

while ($left < $right) {
    // Swap elements
    $temp = $arr[$left];
    echo $temp;
    $arr[$left] = $arr[$right];
    $arr[$right] = $temp;

    // Move pointers inward
    $left++;
    $right--;
}
print_r($arr);




?>