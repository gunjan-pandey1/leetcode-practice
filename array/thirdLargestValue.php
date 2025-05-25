<?php
function getThirdLargest($arr) {
    $n = count($arr);

    if ($n < 3) {
        return -1; // Not enough elements
    }

    // Initialize variables for largest, second largest, and third largest
    $largest = $secondLargest = $thirdLargest = PHP_INT_MIN;

    // Traverse the array once
    for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] > $largest) {
            // Shift values down
            $thirdLargest = $secondLargest;
            $secondLargest = $largest;
            $largest = $arr[$i];
        } elseif ($arr[$i] > $secondLargest && $arr[$i] < $largest) {
            // Update secondLargest and shift value down
            $thirdLargest = $secondLargest;
            $secondLargest = $arr[$i];
        } elseif ($arr[$i] > $thirdLargest && $arr[$i] < $secondLargest) {
            // Update thirdLargest
            $thirdLargest = $arr[$i];
        }
    }

    return ($thirdLargest == PHP_INT_MIN) ? -1 : $thirdLargest;
}

// Example usage
$arr = [12, 35, 1, 10, 34, 1];
echo getThirdLargest($arr); // Output: 12


// in buit function

    // if (count($arr) < 3) {
    //     return -1; // Not enough elements
    // }
    
    // // Remove duplicates and sort in descending order
    // $unique = array_unique($arr);
    // rsort($unique);
    
    // // Return the third element if it exists, otherwise -1
    // return $unique[2] ?? -1;


/*
Time Complexity: O(n)
- The algorithm makes a single pass through the array of size n
- Each element is compared at most 3 times (with largest, secondLargest, and thirdLargest)
- All other operations are constant time O(1)

Space Complexity: O(1) 
- Only uses three variables (largest, secondLargest, thirdLargest) regardless of input size
- No additional data structures are used
- Space used remains constant even as input size grows

Detailed Algorithm Steps:
1. First check if array has less than 3 elements, return -1 if true
2. Initialize three tracking variables to minimum possible integer:
   - largest
   - secondLargest 
   - thirdLargest

3. For each element in array:
   a. If current element > largest:
      - thirdLargest gets secondLargest value
      - secondLargest gets largest value  
      - largest gets current element
   
   b. If current element > secondLargest but < largest:
      - thirdLargest gets secondLargest value
      - secondLargest gets current element
   
   c. If current element > thirdLargest but < secondLargest:
      - thirdLargest gets current element

4. Finally check if thirdLargest was updated (not equal to PHP_INT_MIN)
   - If not updated, return -1
   - If updated, return thirdLargest value
*/

?>
