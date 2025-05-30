<?php
function InsertionSortArray(array $arr): array {
    // Handle empty or single element array
    if (count($arr) <= 1) {
        return $arr;
    }

    $n = count($arr);
    
    // Optimize by using foreach instead of for loop
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        
        // Use binary search to find insertion position
        $left = 0;
        $right = $j;
        
        while ($left <= $right) {
            $mid = floor(($left + $right) / 2);
            if ($arr[$mid] > $key) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }
        
        // Shift elements to the right
        for ($k = $j; $k >= $left; $k--) {
            $arr[$k + 1] = $arr[$k];
        }
        
        $arr[$left] = $key;
    }
    
    return $arr;
}

// Add type validation
try {
    $result = InsertionSortArray([5, 2, 3, 1]);
    print_r($result);
} catch (TypeError $e) {
    echo "Error: Invalid input type. Array expected.\n";
}
?>
