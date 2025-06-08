<?php

function findMissingAndRepeating($arr) {
    $n = count($arr);
    $freq = array_fill(1, $n, 0); // Count from 1 to n

    // Count frequency of each number
    foreach ($arr as $num) {
        $freq[$num]++;
    }

    $missing = $repeating = null;

    foreach ($freq as $num => $count) {
        if ($count == 0) {
            $missing = $num;
        } elseif ($count > 1) {
            $repeating = $num;
        }
    }

    echo "Repeating = $repeating, Missing = $missing\n";
}

// Test case 1
findMissingAndRepeating([3, 1, 3]);

// Test case 2
findMissingAndRepeating([4, 3, 6, 2, 1, 1]);

?>
