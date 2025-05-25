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


function reverseArray($arr) {
    $reversed = [];

    for ($i = count($arr) - 1; $i >= 0; $i--) {
        $reversed[] = $arr[$i]; // append to reversed array
    }

    return $reversed;
}
//output [3,2,1]

//in built function

// $arr = [1,2,3,4, 5];
// $result = array_reverse($arr);
// print_r($result);


?>