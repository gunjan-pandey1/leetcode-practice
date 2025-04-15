<?php
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 5; $j >= $i; $j--) {
        echo "*";
    }
    echo "\n";
}

/*
    output:
    *****
    ****
    ***
    **
    *
*/
?>