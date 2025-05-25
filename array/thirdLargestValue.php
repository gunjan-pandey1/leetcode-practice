<?php
function getThirdLargest($arr) {
    $n = count($arr);

    if ($n < 3) {
        return -1; // Not enough elements
    }

    // Initialize variables for largest, second largest, and third largest
    $largest = $secondLargest = $thirdLargest = PHP_INT_MIN;

    // Traverse the array once
    for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] > $largest) {
            // Shift values down
            $thirdLargest = $secondLargest;
            $secondLargest = $largest;
            $largest = $arr[$i];
        } elseif ($arr[$i] > $secondLargest && $arr[$i] < $largest) {
            // Update secondLargest and shift value down
            $thirdLargest = $secondLargest;
            $secondLargest = $arr[$i];
        } elseif ($arr[$i] > $thirdLargest && $arr[$i] < $secondLargest) {
            // Update thirdLargest
            $thirdLargest = $arr[$i];
        }
    }

    return ($thirdLargest == PHP_INT_MIN) ? -1 : $thirdLargest;
}

// Example usage
$arr = [12, 35, 1, 10, 34, 1];
echo getThirdLargest($arr); // Output: 12


// in buit function

    // if (count($arr) < 3) {
    //     return -1; // Not enough elements
    // }
    
    // // Remove duplicates and sort in descending order
    // $unique = array_unique($arr);
    // rsort($unique);
    
    // // Return the third element if it exists, otherwise -1
    // return $unique[2] ?? -1;



?>
