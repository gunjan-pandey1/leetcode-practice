<?php
function palindrome($str){
    
    $reverse = '';
    $strlen = strlen($str);
    
    for ($i =$strlen-1; $i >=0; $i--)
    {
        $reverse .= $str[$i];
        
    }
    if ($reverse == $str)
    {
        echo "This string is Palindrome". "\n";
    }
    else {
        echo "This string is Not Palindrome". "\n";
    }
    
    return $reverse;
}

$orignal = "radar";

echo "original string . $orignal .\n";

echo "reversed string " . palindrome($orignal). "\n";

?>