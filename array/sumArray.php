<?php

function sumArray($arr)
{
    $sum  = 0;
    for ($i= 0; $i<count($arr); $i++)
    {
        $sum += $arr[$i];
    }
    return $sum;
}

$arr = [1, 2, 3, 4, 5];
echo "The sum of this array is ".  sumArray($arr);

/*
Time Complexity Analysis:
- O(n) where n is the length of the input array
- The function uses a single for loop that iterates through each element exactly once
- Each operation inside the loop (addition) is O(1)
- The count() function in PHP is O(1) as array length is cached

Space Complexity Analysis: 
- O(1) constant space
- Only uses a single variable $sum to store the running total
- No additional data structures are created
- Input array space is not counted as it's passed as parameter

Step by step explanation:
1. Initialize sum variable to 0 - O(1)
2. Get array length using count() - O(1) 
3. Loop through array from 0 to length-1 - O(n) iterations
4. For each iteration:
   - Access array element at index i - O(1)
   - Add element to sum - O(1)
5. Return final sum - O(1)

Total: O(1) + O(1) + O(n) * O(1) = O(n) time complexity
*/

?>