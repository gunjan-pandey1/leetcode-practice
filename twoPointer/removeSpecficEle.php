<?php



function removeElement(&$arr, $ele) {
    $j = 0; // slow pointer

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] != $ele) {
            $arr[$j] = $arr[$i];
            $j++;
        }
    }

    return $j;
}

// Test
$arr = [3, 2, 2, 3];
$newLength = removeElement($arr, 3);

echo "New length: " . $newLength . "\n";
print_r($arr);

// Input:
// [3, 2, 2, 3] and ele = 3

// Output:
// [2, 2, _, _] and return 2 (kyunki 2 elements bache jo 3 nahi hai)

?>
