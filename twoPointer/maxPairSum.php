<?php

function maxPairSum($arr) {
    $n = count($arr);
    if ($n < 2) return 0; // agar pair possible hi na ho

    return $arr[$n-1] + $arr[$n-2];
}

// Test Case
$arr = [1, 3, 5, 7, 9];
echo "Maximum Pair Sum: " . maxPairSum($arr);



?>

//📌 Ya full Two Pointer se bhi kar sakte ho (for practice)

// <?php

// function maxPairSum($arr) {
//     $left = 0;
//     $right = count($arr) - 1;
//     $maxSum = PHP_INT_MIN;

//     while ($left < $right) {
//         $sum = $arr[$left] + $arr[$right];
//         if ($sum > $maxSum) {
//             $maxSum = $sum;
//         }
//         // Kyuki sorted hai to left++ ya right-- kar sakte
//         $left++;
//     }

//     return $maxSum;
// }

// $arr = [1, 3, 5, 7, 9];
// echo "Maximum Pair Sum: " . maxPairSum($arr);

// ?>

