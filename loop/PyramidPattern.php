<?php
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    // Print leading spaces
    for ($k = 1; $k <= ($rows - $i); $k++) {
        echo " ";
    }
    // Print the stars
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}

?>