<?php
function sumNum($arr)
{
    
    $sum = 0;
    foreach($arr as $val)
    {
        $sum += $val;
    }
    return $sum;
}
$arr = [10,20,30,40];
$result = sumNum($arr);
print_r($result);

// //in buit function
// $arr = [10,20,30,40];
// $result = array_sum($arr);
// print_r($result);
?>