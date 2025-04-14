<?php
function maxProductTriplet($arr) {
    $n = count($arr);

    if ($n < 3) {
        return "Not enough elements";
    }

    // Initialize variables
    $max1 = $max2 = $max3 = PHP_INT_MIN; // Three largest numbers
    $min1 = $min2 = PHP_INT_MAX; // Two smallest numbers

    // Traverse the array
    for ($i = 0; $i < $n; $i++) {
        $num = $arr[$i];

        // Update the three largest numbers
        if ($num > $max1) {
            $max3 = $max2;
            $max2 = $max1;
            $max1 = $num;
        } elseif ($num > $max2) {
            $max3 = $max2;
            $max2 = $num;
        } elseif ($num > $max3) {
            $max3 = $num;
        }

        // Update the two smallest numbers (to handle negative cases)
        if ($num < $min1) {
            $min2 = $min1;
            $min1 = $num;
        } elseif ($num < $min2) {
            $min2 = $num;
        }
    }

    // Calculate the two possible maximum products:
    // 1. The product of the three largest numbers: max1 * max2 * max3
    // 2. The product of the two smallest numbers and the largest number (handles negative numbers): min1 * min2 * max1
    $maxProduct = max($max1 * $max2 * $max3, $min1 * $min2 * $max1);

    return $maxProduct;
}

// Example usage
$arr1 = [10, 3, 5, 6, 20];
echo maxProductTriplet($arr1) . "\n"; // Output: 1200

$arr2 = [-10, -3, -5, -6, -20];
echo maxProductTriplet($arr2) . "\n"; // Output: -90

$arr3 = [1, -4, 3, -6, 7, 0];
echo maxProductTriplet($arr3) . "\n"; // Output: 168
?>
