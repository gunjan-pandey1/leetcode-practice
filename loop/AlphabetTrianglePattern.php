<?php
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $i);
    }
    echo "\n";
}

/*
    output:
    A
    BB
    CCC
    DDDD
    EEEEE
*/

/*
Time Complexity: O(n²)
- The outer loop runs n times (where n is the number of rows)
- For each iteration i of outer loop, inner loop runs i times
- Total iterations: 1 + 2 + 3 + ... + n = n(n+1)/2
- Therefore, time complexity is O(n²)

Space Complexity: O(1) 
- Only using constant extra space regardless of input size
- Variables i, j and rows take constant space
- No additional data structures used

Detailed explanation:
1. Outer loop (i=1 to rows):
   - Controls number of rows in pattern
   - Each iteration represents one row
   
2. Inner loop (j=1 to i):
   - Controls number of characters in each row
   - Prints character i times in each row
   
3. chr(64 + i):
   - 64 is ASCII value before 'A'
   - Adding i gives ASCII values:
     i=1: 65 ('A')
     i=2: 66 ('B')
     i=3: 67 ('C') and so on
   
4. Pattern formation:
   Row 1: 1 character (A)
   Row 2: 2 characters (BB)
   Row 3: 3 characters (CCC)
   Row 4: 4 characters (DDDD)
   Row 5: 5 characters (EEEEE)
*/

?>