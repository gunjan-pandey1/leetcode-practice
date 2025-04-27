<?php
$rows = 4; // Adjusted rows to match your example output

for ($i = 1; $i <= $rows; $i++) {
    // Print leading spaces
    for ($k = 1; $k <= ($rows - $i); $k++) {
        echo " ";
    }

    // Print increasing numbers
    $num = $i;
    for ($j = 1; $j <= $i; $j++) {
        echo $num++;
    }

    // Print decreasing numbers (excluding the middle one if rows > 1)
    $num = $num - 2;
    for ($j = 1; $j < $i; $j++) {
        echo $num--;
    }

    echo "\n";
}

/*
    output:
    1
   232
  34543
 4567654
*/

/*
Time Complexity Analysis:
- O(n^2) where n is the number of rows
- For each row i (1 to n):
  - We print (n-i) spaces: O(n)
  - We print i increasing numbers: O(n)
  - We print (i-1) decreasing numbers: O(n)
  - Total operations per row ≈ O(n)
- Total operations across all rows = O(n^2)

Space Complexity Analysis:
- O(1) constant space
- Only using a few variables regardless of input size:
  - $rows (input)
  - Loop counters ($i, $j, $k)
  - $num for tracking numbers to print
- No additional data structures used

Detailed Explanation:
1. Outer loop (i=1 to rows):
   - Controls number of rows in pyramid
   - Each iteration prints one complete row

2. First inner loop (spaces):
   - Prints (rows-i) spaces for left alignment
   - Decreases by 1 each row to maintain pyramid shape

3. Second inner loop (increasing numbers):
   - Prints i numbers starting from i
   - Each number increments by 1
   - Forms left side of pyramid

4. Third inner loop (decreasing numbers):
   - Prints (i-1) numbers in descending order
   - Forms right side of pyramid
   - Excludes middle number to avoid duplication

The pattern builds symmetrically, with each row requiring more operations
than the previous one, but overall complexity remains quadratic.
*/

?>