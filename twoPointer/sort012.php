<?php

function sort012(&$arr) {
    $low = 0;
    $mid = 0;
    $high = count($arr) - 1;

    while ($mid <= $high) {
        if ($arr[$mid] == 0) {
            // swap low and mid
            $temp = $arr[$low];
            $arr[$low] = $arr[$mid];
            $arr[$mid] = $temp;
            $low++;
            $mid++;
        } elseif ($arr[$mid] == 1) {
            $mid++;
        } else {
            // swap mid and high
            $temp = $arr[$mid];
            $arr[$mid] = $arr[$high];
            $arr[$high] = $temp;
            $high--;
        }
    }
}

// Test
$arr = [0, 1, 2, 0, 1, 2];
sort012($arr);
print_r($arr);

?>
