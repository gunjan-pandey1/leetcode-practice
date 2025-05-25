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

/*
Time Complexity Analysis:
- O(n) where n is the length of the input array
- The algorithm makes a single pass through the array to find the three largest and two smallest numbers
- All other operations are constant time O(1)

Space Complexity Analysis: 
- O(1) constant space
- Only uses a fixed number of variables (max1, max2, max3, min1, min2) regardless of input size

Detailed Algorithm Explanation:
1. Input Validation:
   - Check if array has at least 3 elements
   - Return error message if not enough elements

2. Initialize Variables:
   - Three variables for largest numbers (max1, max2, max3)
   - Two variables for smallest numbers (min1, min2)
   - This handles both positive and negative number cases

3. Single Array Traversal:
   - For each number in array:
     a) Update three largest numbers if current number is larger
     b) Update two smallest numbers if current number is smaller
   - This maintains sorted order of max/min numbers efficiently

4. Final Calculation:
   - Compare two possible maximum products:
     a) Product of three largest numbers (max1 * max2 * max3)
     b) Product of two smallest numbers and largest number (min1 * min2 * max1)
   - Return the larger of these two products

The algorithm is optimal as it requires only one pass through the array
and uses constant extra space.
*/

?>
