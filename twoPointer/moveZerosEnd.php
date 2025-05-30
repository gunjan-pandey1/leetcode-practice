
<?php
function moveZeroesToEnd(&$arr) {
    $n = count($arr);
    $i = 0; // Pointer to place non-zero elements

    // Step 1: Move non-zero elements to the front
    for ($j = 0; $j < $n; $j++) {
        if ($arr[$j] != 0) {
            $arr[$i] = $arr[$j];
            $i++;
        }
    }

    // Step 2: Fill remaining positions with zeroes
    while ($i < $n) {
        $arr[$i] = 0;
        $i++;
    }
}

// Example
$arr = [0, 1, 0, 3, 12];
moveZeroesToEnd($arr);
print_r($arr);

