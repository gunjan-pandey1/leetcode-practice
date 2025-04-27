<?php
$arr = [1,2,3];

$left = 0;

$right = count($arr) - 1;

while ($left < $right) {
    // Swap elements
    $temp = $arr[$left];
    echo $temp;
    $arr[$left] = $arr[$right];
    $arr[$right] = $temp;

    // Move pointers inward
    $left++;
    $right--;
}
print_r($arr);

/*
Time Complexity: O(n/2) which simplifies to O(n)
- The while loop runs from both ends towards the middle
- It processes half the array length since left and right pointers move inward
- Even though we only traverse half the array, we drop constants in Big O notation

Space Complexity: O(1)
- Only uses a fixed amount of extra space regardless of input size
- Just three variables: left, right, and temp for swapping
- No additional data structures are created

Detailed steps:
1. Initialize two pointers:
   - left starts at index 0
   - right starts at last index (array length - 1)

2. While left pointer is less than right pointer:
   a. Store left element in temp variable
   b. Replace left element with right element
   c. Replace right element with temp value
   d. Increment left pointer
   e. Decrement right pointer

3. Process continues until pointers meet in middle
   - For odd length arrays, middle element stays in place
   - For even length arrays, all elements are swapped

This is an in-place reversal algorithm that modifies the original array
without requiring additional space.
*/



function reverseArray($arr) {
    $reversed = [];

    for ($i = count($arr) - 1; $i >= 0; $i--) {
        $reversed[] = $arr[$i]; // append to reversed array
    }

    return $reversed;
}


?>