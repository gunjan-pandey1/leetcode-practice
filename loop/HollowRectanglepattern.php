<?php
$rows = 5;
$cols = 7;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $cols; $j++) {
        if ($i == 2 || $i == 3 || $i == 4) {
            echo "* *";
            break;
        } else {
            echo "*";
        }
    }
    echo "\n";
}

/*
    output:
    *******
    *  *
    *  *
    *  *
    *******
*/
?>