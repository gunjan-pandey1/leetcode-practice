<?php

function removeDuplicates(&$arr) {
    $n = count($arr);
    if ($n == 0) return 0;

    $i = 0;

    for ($j = 1; $j < $n; $j++) {
        if ($arr[$i] != $arr[$j]) {
            $i++;
            $arr[$i] = $arr[$j];
        }
    }

    // Final unique elements count = $i + 1
    return $i + 1;
}

// Test Case
$arr = [1, 2, 2, 3, 4, 4, 4, 5, 5];
$newLength = removeDuplicates($arr);

// Print unique part of array
for ($k = 0; $k < $newLength; $k++) {
    echo $arr[$k] . " ";
}
