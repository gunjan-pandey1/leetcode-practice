<?php

//need square of 1,5,9


$array = [
    [1, 2, 3], 
    [4, 5, 6], 
    [7, 8, 9]
];

// Loop through the array using nested for loops
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        // Square the elements at positions (0,0), (1,1), and (2,2)
        if ($i === $j) {
            $array[$i][$j] = $array[$i][$j] * $array[$i][$j];
        }
    }
}

// Print the modified array
print_r($array);



// second way

$array = [
    [1, 2, 3], 
    [4, 5, 6], 
    [7, 8, 9]
];

// Use array_map to modify the array
$array = array_map(function ($row, $rowIndex) {
    return array_map(function ($value, $colIndex) use ($rowIndex) {
        // Square the elements at positions (0,0), (1,1), and (2,2)
        return $rowIndex === $colIndex ? $value * $value : $value;
    }, $row, array_keys($row));
}, $array, array_keys($array));

// Print the modified array
print_r($array);
?>

?>
