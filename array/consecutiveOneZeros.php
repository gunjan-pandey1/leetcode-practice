<?php

function maxConsecutiveCount($arr) {
    $maxCount = 0;
    $count = 1;

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] == $arr[$i - 1]) {
            $count++;
        } else {
            $maxCount = max($maxCount, $count);
            $count = 1;
        }
    }

    return max($maxCount, $count);
}

// Test the function
$arr = [0,0,0,1,1,1];
echo maxConsecutiveCount($arr);
