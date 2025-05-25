<?php

function checkvowel($str){
    $vowelstr = 0;
    
    $vowelen = strlen($str) - 1;    
    $vowel = ['a','e','i','o','u']; 
    
   for ($i = 0; $i < strlen($str); $i++){
        
        if (in_array($str[$i], $vowel))
        {
            $vowelstr++;
        }
    }
    return $vowelstr;
}
 
$vowel = 'ayayaaeiou';
echo "this is vowel count". checkvowel($vowel);
?>