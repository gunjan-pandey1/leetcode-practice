<?php

function sumArray($arr)
{
    $sum  = 0;
    for ($i= 0; $i<count($arr); $i++)
    {
        $sum += $arr[$i];
    }
    return $sum;
}

$arr = [1, 2, 3, 4, 5];
echo "The sum of this array is ".  sumArray($arr);
?>