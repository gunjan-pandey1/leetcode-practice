<?php
$rows = 5;
$cols = 7;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $cols; $j++) {
        if ($i == 2 || $i == 3 || $i == 4) {
            echo "* *";
            break;
        } else {
            echo "*";
        }
    }
    echo "\n";
}

/*
    output:
    *******
    *  *
    *  *
    *  *
    *******
*/

/*
Time Complexity: O(rows * cols)
- The code uses two nested loops:
  - Outer loop runs 'rows' times (5 iterations)
  - Inner loop runs 'cols' times (7 iterations) in worst case
  - For middle rows (2,3,4), inner loop breaks after first iteration
- Total iterations: 
  - First row: 7 iterations
  - Middle rows (3 rows): 1 iteration each = 3 iterations
  - Last row: 7 iterations
  - Total = 17 iterations
- Still considered O(rows * cols) as worst case

Space Complexity: O(1)
- Only uses fixed variables:
  - $rows (integer)
  - $cols (integer)
  - $i (loop counter)
  - $j (loop counter)
- No additional space needed as pattern is printed directly
- Space usage remains constant regardless of input size

Algorithm Explanation:
1. First row (i=1): Prints '*' cols times (full row of stars)
2. Middle rows (i=2,3,4): 
   - Prints "* *" once and breaks inner loop
   - Creates hollow effect
3. Last row (i=5): Prints '*' cols times (full row of stars)
4. Each row ends with newline character
*/

?>