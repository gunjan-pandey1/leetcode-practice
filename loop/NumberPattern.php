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
?>