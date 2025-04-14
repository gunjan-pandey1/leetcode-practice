<?php
$prev2 = 0;
$prev1 = 1;

echo $prev2 . PHP_EOL;
echo $prev1 . PHP_EOL;

for ($fibo = 0; $fibo < 18; $fibo++) {
    $newFibo = $prev1 + $prev2;
    echo $newFibo . PHP_EOL;
    $prev2 = $prev1;
    $prev1 = $newFibo;
}
?>