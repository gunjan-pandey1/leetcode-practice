
<?php
function reverseWords($s) {
    $length = 0;
    while (isset($s[$length])) {
        $length++;
    }
    $words = array();
    $currentWord = "";
    for ($i = 0; $i < $length; $i++) {
        $char = $s[$i];
        if ($char == '.') {
            if ($currentWord !== "") {
                $words[] = $currentWord;
                $currentWord = "";
            }
        } else {
            $currentWord .= $char;
        }
    }
    if ($currentWord !== "") {
        $words[] = $currentWord;
    }
    $reversedWords = array();
    $wordsCount = 0;
    while (isset($words[$wordsCount])) {
        $wordsCount++;
    }
    for ($i = $wordsCount - 1; $i >= 0; $i--) {
        $reversedWords[] = $words[$i];
    }
    $result = "";
    $reversedCount = 0;
    while (isset($reversedWords[$reversedCount])) {
        $reversedCount++;
    }
    for ($i = 0; $i < $reversedCount; $i++) {
        $result .= $reversedWords[$i];
        if ($i != $reversedCount - 1) {
            $result .= ".";
        }
    }
    return $result;
}

$str = "i.like.this.program.very.much";
// echo reverseWords($str);
?>
