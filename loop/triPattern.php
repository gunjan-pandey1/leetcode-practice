<?php
function triPattern($arr)
{
    for($i=0; $i<= 5; $i++)
    {
        for($j=0; $j<=$i; $j++){
             echo "*";
        }
        echo "<br>";
    }
}
triPattern($arr)

/*
    output:
    *
    **
    ***
    ****
    *****
*/

/*
Time Complexity: O(n^2)
- The outer loop runs n times (where n = 5 in this case)
- For each iteration of outer loop i, the inner loop runs (i+1) times
- Total iterations = 1 + 2 + 3 + 4 + 5 = 15
- This forms an arithmetic sequence, summing up to n(n+1)/2
- Therefore time complexity is O(n^2)

Space Complexity: O(1) 
- Only using constant extra space
- Variables i and j take constant space
- No additional data structures used
- Space used doesn't grow with input size

Detailed steps:
1. Outer loop (i) controls number of rows (0 to 5)
2. Inner loop (j) controls stars in each row (0 to i)
3. For each row i:
   - Print i+1 stars horizontally
   - Add line break after each row
4. Pattern builds up row by row:
   Row 0: 1 star
   Row 1: 2 stars
   Row 2: 3 stars
   Row 3: 4 stars 
   Row 4: 5 stars
*/

?>