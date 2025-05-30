<?php

function twoSum($arr, $target) {
    $left = 0;
    $right = count($arr) - 1;

    while ($left < $right) {
        $sum = $arr[$left] + $arr[$right];

        if ($sum == $target) {
            return "Pair found: " . $arr[$left] . " + " . $arr[$right] . " = $target";
        } elseif ($sum < $target) {
            $left++;   // sum chhota hai — badhao
        } else {
            $right--;  // sum bada hai — ghattao
        }
    }

    return "No pair found";
}

$arr = [1, 2, 3, 4, 6];
$target = 6;

echo twoSum($arr, $target);

?>
