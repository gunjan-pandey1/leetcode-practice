<?php
function revNum($arr)
{
    $reversed = [];
    for($i = count($arr)-1; $i >=0;$i--)
    {
        $reversed[] = $arr[$i];
    }
    return $reversed;
}
$arr = [1,2,3,4, 5];
$result = revNum($arr);
print_r($result);

//in buit function
$arr = [1,2,3,4, 5];
$result = array_reverse($arr);
print_r($result);

?>