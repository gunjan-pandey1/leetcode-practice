<?php
function getLargest($arr) {
    $largest = $arr[0]; // Assume first element is largest

    // Loop through array to find the maximum
    foreach ($arr as $num) {
        if ($num > $largest) {
            $largest = $num; // Update largest if a bigger number is found
        }
    }

    return $largest;
}

// Example usage
$arr = [12, 35, 1, 10, 34, 1];
echo getLargest($arr); // Output: 35
        
// in built function
    return max($arr);

/*
Time Complexity Analysis:
- O(n) where n is the length of the input array
- We need to traverse through each element exactly once in the foreach loop
- Each comparison operation takes constant time O(1)

Space Complexity Analysis: 
- O(1) constant space
- We only use a single variable $largest to keep track of maximum value
- No additional space is needed regardless of input size

Step by step explanation:
1. Initialize $largest with first element - O(1)
2. Iterate through array using foreach - O(n)
   - For each element, compare with current largest - O(1)
   - Update largest if needed - O(1)
3. Return the final largest value - O(1)

Total Time: O(n)
Total Space: O(1)
*/

?>
