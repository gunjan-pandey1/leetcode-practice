<?php
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}

/*
    output:
    *
    **
    ***
    ****
    *****
*/

/*
Time Complexity Analysis:
- The outer loop runs 'n' times (where n = number of rows)
- For each i, the inner loop runs 'i' times
- Total iterations = 1 + 2 + 3 + ... + n
- This forms an arithmetic sequence with sum = n(n+1)/2
- Therefore, Time Complexity is O(n²)

Space Complexity Analysis:
- Only using a constant amount of extra space (variables i, j)
- No additional data structures used
- Therefore, Space Complexity is O(1)

Detailed Explanation:
1. Outer loop (i=1 to rows):
   - First iteration: inner loop runs 1 time
   - Second iteration: inner loop runs 2 times
   - Third iteration: inner loop runs 3 times
   And so on...

2. Total number of star prints:
   Row 1: 1 star
   Row 2: 2 stars
   Row 3: 3 stars
   Row 4: 4 stars
   Row 5: 5 stars
   Total = 15 stars = 5(5+1)/2 operations

3. The nested structure creates a quadratic time complexity
   because for each increment in input size (rows),
   the number of operations increases quadratically.
*/


?>
