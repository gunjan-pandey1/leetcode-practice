<?php
$str = "PHP is a powerful scripting language";
$words = explode(" ", $str); 

$longestWord = "";
$maxLength = 0;

foreach ($words as $word) {
    $length = strlen($word);
    if ($length > $maxLength) {
        $maxLength = $length;
        $longestWord = $word;
    }
}
echo "The longest word is: " . $longestWord;
?>
