<?php
function anagrams($firststr, $secondStr)
{
    if (strlen($firststr) !== strlen($secondStr))
    {
        return false;
    }   
    
    $firstArray = str_split($firststr);
    $secondArray = str_split($secondStr);
    
    sort($firstArray);
    sort($secondArray);
    
    return $firstArray === $secondArray;
}   
$firstStr = "listen";
$secondStr = "silent";

if (anagrams($firstStr, $secondStr))  {
    echo "The strings '$firstStr' and '$secondStr' are anagrams.\n";
} else {
    echo "The strings '$firstStr' and '$secondStr' are NOT anagrams.\n";
}

?>