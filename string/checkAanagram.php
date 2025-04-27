<?php
function anagrams($firststr, $secondStr)
{
    if (strlen($firststr) !== strlen($secondStr))
    {
        return false;
    }   
    
    $firstArray = str_split($firststr);
    $secondArray = str_split($secondStr);
    
    sort($firstArray);
    sort($secondArray);
    
    return $firstArray === $secondArray;
}   
$firstStr = "listen";
$secondStr = "silent";

if (anagrams($firstStr, $secondStr))  {
    echo "The strings '$firstStr' and '$secondStr' are anagrams.\n";
} else {
    echo "The strings '$firstStr' and '$secondStr' are NOT anagrams.\n";
}

/*
Time Complexity Analysis:
- str_split(): O(n) where n is length of string
- sort(): O(n log n) where n is length of array
- Array comparison: O(n)
Overall Time Complexity: O(n log n) dominated by sorting operation

Space Complexity Analysis:
- str_split() creates new arrays: O(n) for each string
- Sorted arrays: O(n) additional space for each string
Overall Space Complexity: O(n)

Step by step explanation:
1. Length Check (O(1)):
   - First checks if strings have same length
   - Returns false immediately if lengths differ

2. String to Array Conversion (O(n)):
   - str_split() converts strings to character arrays
   - Creates two new arrays of n elements each
   - Takes O(n) space for each array

3. Sorting (O(n log n)):
   - PHP's sort() uses quicksort algorithm
   - Takes O(n log n) time to sort each array
   - Modifies arrays in place, no additional space

4. Array Comparison (O(n)):
   - Compares sorted arrays element by element
   - Takes O(n) time in worst case
   - No additional space needed

Alternative approaches:
- Could use character frequency count (O(n) time, O(1) space)
- Could use string functions like count_chars()
*/

?>