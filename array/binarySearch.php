<?php

function BinarySearch ($names, $searchName)
{
    $start = 0;
    $end = count($names)-1;
    while ($start <= $end)
    {
        $mid = floor(($start + $end)/2);
        echo $mid;die;


        
    }
    return -1;


}
$stuName = [10, 25, 38, 55, 72, 91];
$searchName  = 91;
echo BinarySearch($stuName,$searchName)

?>