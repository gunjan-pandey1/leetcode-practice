<?php
$rows = 5;

for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $i);
    }
    echo "\n";
}

/*
    output:
    EEEEE
    DDDD
    CCC
    BB
    A
*/

/*
Time Complexity: O(n²)
- The outer loop runs n times (where n is the number of rows)
- For each iteration of outer loop, inner loop runs i times (where i decreases from n to 1)
- Total iterations: n + (n-1) + (n-2) + ... + 1 = n(n+1)/2
- Therefore, time complexity is O(n²)

Space Complexity: O(1)
- Only using constant extra space regardless of input size
- Variables $i and $j take constant space
- No additional data structures used

Detailed explanation:
1. Outer loop starts with i=5 and decrements until 1
2. For each i:
   - Inner loop runs i times
   - Prints character calculated by chr(64 + i)
   - 64 is ASCII offset (A=65, B=66, etc)
3. Pattern forms reverse triangle:
   - Row 1: E printed 5 times
   - Row 2: D printed 4 times
   - Row 3: C printed 3 times
   - Row 4: B printed 2 times
   - Row 5: A printed 1 time
*/

?>