<?php
//if want reverse than change the number and decrement the number.
$rows = 4;
$cols = 3;
$number = 1;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $cols; $j++) {
        if($number == 0 || $number == 11) {
            break;
        }
        echo $number++;
    }
    echo "\n";
}

/*
Time Complexity: O(rows * cols)
- The code uses two nested loops:
  - Outer loop runs 'rows' times (4 iterations)
  - Inner loop runs 'cols' times (3 iterations) for each outer loop iteration
  - Total iterations = rows * cols = 4 * 3 = 12 operations
- Each operation (printing number) takes constant time O(1)
- Therefore, total time complexity is O(rows * cols)

Space Complexity: O(1)
- The program uses only a fixed number of variables:
  - $rows (integer)
  - $cols (integer) 
  - $number (integer)
  - Loop counters $i and $j (integers)
- No additional space is needed as input size grows
- Space used remains constant regardless of input
- Therefore, space complexity is O(1)

Step by step execution:
1. First iteration (i=1):
   - Prints: 1, 2, 3
   - number becomes 4
2. Second iteration (i=2):
   - Prints: 4, 5, 6
   - number becomes 7
3. Third iteration (i=3):
   - Prints: 7, 8, 9
   - number becomes 10
4. Fourth iteration (i=4):
   - Prints: 10
   - number becomes 11 and loop breaks

Output pattern:
123
456
789
10
*/

?>