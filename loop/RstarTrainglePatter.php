<?php
//write the time and space compixilty for the above code and explain me in deep step by step
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 5; $j >= $i; $j--) {
        echo "*";
    }
    echo "\n";
}

/*
    output:
    *****
    ****
    ***
    **
    *
*/

/*
Time Complexity: O(n^2)
- The outer loop runs n times (where n is the number of rows)
- For each iteration of outer loop, inner loop runs (n-i+1) times
- Total iterations: n + (n-1) + (n-2) + ... + 1 = n(n+1)/2
- Therefore, time complexity is O(n^2)

Space Complexity: O(1)
- Only using constant extra space regardless of input size
- Variables i, j and rows take constant space
- No additional data structures used

Detailed explanation:
1. Outer loop (i=1 to rows):
   - Controls number of rows in pattern
   - Runs 5 times in this case

2. Inner loop (j=5 to i, decrementing):
   - Controls number of stars in each row
   - First iteration: 5 stars (j: 5->1)
   - Second iteration: 4 stars (j: 5->2)
   - Third iteration: 3 stars (j: 5->3)
   - Fourth iteration: 2 stars (j: 5->4)
   - Fifth iteration: 1 star (j: 5->5)

3. Pattern formation:
   Row 1: ***** (5 stars)
   Row 2: ****  (4 stars)
   Row 3: ***   (3 stars)
   Row 4: **    (2 stars)
   Row 5: *     (1 star)
*/

?>