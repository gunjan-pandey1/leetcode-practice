<?php

//Find Minimum in Rotated Sorted Array

//Find the minimum element in a rotated sorted array (no duplicates).

function minimumSort($arr)
{
    //step 1: initialize sttrat and end
    $start = 0;
    $end = count($arr)-1;
    
    
    while ($start < $end)
    {
        $mid = floor(($start + $end)/2);
        
        if($arr[$mid] < $arr[$end])
        {
            $end = $mid;
        }
        else if ($arr[$mid] > $arr[$end])
        {
            $start = $mid + 1; 
        }
        
    }
    return $arr[$start];
}
$arr = [7,8,9,1,2,3,4,5,6];
$result = minimumSort($arr);
echo $result;
?>