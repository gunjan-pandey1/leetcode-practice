<?php
// without using in built function 
$array = [5, 6, 7, 8];
$search = 6;
$found = false;

foreach ($array as $item) {
    if ($item === $search) {
        $found = true;
        break;

    }
}

if ($found) {
    echo "true";
} else {
    echo "false";
}

// with using in built function

$array = [5, 6, 7, 8];
$search = 6;

if (in_array($search, $array)) {
    echo "true";
} else {
    echo "false";
}

?>
