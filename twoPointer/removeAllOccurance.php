<?php

function removeElement(&$arr, $ele) {
    $j = 0; // non-ele value chipkaane ki position
    $n = count($arr);

    for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] != $ele) {
            $arr[$j] = $arr[$i];
            $j++;
        }
    }

    return $j; // non-ele values ki count
}

// Test
$arr = [0, 1, 3, 0, 2, 2, 4, 2];
$ele = 2;
$count = removeElement($arr, $ele);

echo "Count of elements not equal to $ele = $count\n";
print_r($arr);

?>
