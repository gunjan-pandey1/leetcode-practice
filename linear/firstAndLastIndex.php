<?php

function firstAndLastElement($arr,$target)
{
    $tempArray= [];
   for ($i=0; $i< count($arr); $i++)
   {
      if($arr[$i] == $target)
      {
          $first = $i;
          break;
      }else {
          $first = -1;
      }
   }
   for ($i= count($arr)-1; $i >=0; $i--)
   {
      if($arr[$i] == $target)
      {
           $second =$i;
           break;
      }
      else
      {
          $second = -1;
      }
     
   }
   
   return [$first, $second];
}
    
$arr = [2, 4, 4, 4, 6, 6, 7, 8, 8, 9];
$target = 4;
$result = firstAndLastElement($arr, $target);

print_r($result);

?>