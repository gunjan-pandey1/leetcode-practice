<?

// Given an array of integers as strings and numbers, return the sum of the array values as if all were numbers.
// Return your answer as a number.

// class SumMixTest extends TestCase {
//     public function testExamples() {
//       $this->assertSame(22, sum_mix([9, 3, '7', '3']));
//       $this->assertSame(42, sum_mix(['5', '0', 9, 3, 2, 1, '9', 6, 7]));
//       $this->assertSame(41, sum_mix(['3', 6, 6, 0, '5', 8, 5, '6', 2, '0']));
//     }
//   }

function sum_mix($arr) {
    $sum = 0;
    foreach ($arr as $value) {
        $sum += (int)$value; // convert to int and add
    }
    return $sum;
}

//in built function
// function sum_mix($arr) {
//     return array_sum(array_map('intval', $arr));
// }
