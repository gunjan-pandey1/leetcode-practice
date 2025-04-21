<?php
//with in built function
$array = [1, 2, 2, 3, 4, 4];
$uniqueArray = array_unique($array);

print_r($uniqueArray);

// wihthout in built function
$array = [1, 2, 2, 3, 4, 4];
$uniqueArray = [];

foreach ($array as $item) {
    $exists = false;

    foreach ($uniqueArray as $uniqueItem) {
        if ($item === $uniqueItem) {
            $exists = true;
            break;
        }
    }

    if (!$exists) {
        $uniqueArray[] = $item;
    }
}

print_r($uniqueArray);

//Remove Duplicate Elements from an Array
//Input: [1, 2, 2, 3, 4, 4] → Output: [1, 2, 3, 4]
?>
