<?php
/*
Time Complexity Analysis: O(n)
- The code uses a single foreach loop that iterates through the input array once
- All operations inside the loop (isset(), array push) are O(1)
- Therefore total time complexity is O(n) where n is the length of input array

Space Complexity Analysis: O(n)
- $uniqueArray stores unique elements, worst case O(n) when all elements are unique
- $seen hash table also stores unique elements, worst case O(n)
- Total space complexity is O(n) + O(n) = O(n)

Step by step explanation:
1. Initialize input array [1, 2, 2, 3, 4, 4]
2. Create empty arrays $uniqueArray and $seen
3. First iteration (1):
   - seen[1] doesn't exist
   - Add 1 to uniqueArray
   - Set seen[1] = true
   - uniqueArray = [1], seen = [1 => true]
4. Second iteration (2):
   - seen[2] doesn't exist
   - Add 2 to uniqueArray
   - Set seen[2] = true
   - uniqueArray = [1, 2], seen = [1 => true, 2 => true]
5. Third iteration (2):
   - seen[2] exists, skip
   - No changes
6. Fourth iteration (3):
   - seen[3] doesn't exist
   - Add 3 to uniqueArray
   - Set seen[3] = true
   - uniqueArray = [1, 2, 3], seen = [1 => true, 2 => true, 3 => true]
7. Fifth iteration (4):
   - seen[4] doesn't exist
   - Add 4 to uniqueArray
   - Set seen[4] = true
   - uniqueArray = [1, 2, 3, 4], seen = [1 => true, 2 => true, 3 => true, 4 => true]
8. Sixth iteration (4):
   - seen[4] exists, skip
   - No changes
9. Final uniqueArray = [1, 2, 3, 4]
*/

$array = [1, 2, 2, 3, 4, 4];
$uniqueArray = [];
$seen = []; // Using hash table for O(1) lookups

// Optimized approach using hash table
foreach ($array as $item) {
    // Check if item exists in seen array using array key
    if (!isset($seen[$item])) {
        $uniqueArray[] = $item;
        $seen[$item] = true;
    }
}

print_r($uniqueArray);

//Remove Duplicate Elements from an Array
//Input: [1, 2, 2, 3, 4, 4] → Output: [1, 2, 3, 4]

/*
Time Complexity: O(n^2)
- The outer foreach loop iterates through each element in the input array once - O(n)
- For each element, the inner foreach loop checks all elements in uniqueArray - O(n)
- Therefore, total time complexity is O(n * n) = O(n^2)

Space Complexity: O(n)
- In the worst case where all elements are unique, uniqueArray will store n elements
- Therefore space complexity is O(n)

Step by step explanation:
1. Start with input array [1, 2, 2, 3, 4, 4]
2. For each element in input array:
   - Check if it exists in uniqueArray using inner loop
   - If not found, add to uniqueArray
3. First iteration: uniqueArray = [1]
4. Second iteration: uniqueArray = [1, 2]
5. Third iteration: 2 exists, skip
6. Fourth iteration: uniqueArray = [1, 2, 3]
7. Fifth iteration: uniqueArray = [1, 2, 3, 4]
8. Sixth iteration: 4 exists, skip
9. Final uniqueArray = [1, 2, 3, 4]

Note: This approach can be optimized to O(n) time complexity using:
- PHP array_unique() function
- Using associative array/hash table
- Using array_flip() and array_keys()
*/

?>
