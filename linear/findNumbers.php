<?php
function searching($numbers, $searchNum)
{   
    $tempArr = [];
 
    foreach($searchNum as $sval)
    {
        $result = 'false';
 
        foreach($numbers as $nVal)
        {
            if($sval == $nVal)
            {
                $result = 'true';
                break;  
            }
        }
 
        $tempArr[] = $result;
    }
 
    return $tempArr;
}
 
// Example arrays
$numbers = [125, 91, 78, 52, 132, 13, 1, 5];
$searchNum = [91, 14, 52, 56, 5];
 
$result = searching($numbers, $searchNum);
echo implode(', ', $result);
?>
 