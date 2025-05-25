<?
//Q. Merge Two Arrays Without Duplicates Input: [1, 2, 3] and [3, 4, 5] → Output: [1, 2, 3, 4, 5]

$array = [1, 2, 3];
$array2 = [3, 4, 5];
$mergedArray = [];

// Add all elements from $array to $mergedArray
foreach ($array as $val) {
    $mergedArray[] = $val;
}

// Add elements from $array2 if they don't already exist in $mergedArray
foreach ($array2 as $val2) {
    $exists = false;

    foreach ($mergedArray as $val) {
        if ($val === $val2) {
            $exists = true;
            break;
        }
    }

    if (!$exists) {
        $mergedArray[] = $val2;
    }
}

print_r($mergedArray);

//in built function

// $array1 = [1, 2, 3];
// $array2 = [3, 4, 5];

// // Merge arrays and remove duplicates
// $mergedArray = array_unique(array_merge($array1, $array2));

// // Re-index the array
// $mergedArray = array_values($mergedArray);

// print_r($mergedArray); // Output: [1, 2, 3, 4, 5]
?>
