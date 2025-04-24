
<?php
//Count the Number of Words in a String Input: "I love PHP coding" → Output: 4
$input = "I love PHP coding";
$length = strlen($input);
$wordCount = 0;

// If string is not empty, we have at least 1 word
if ($length > 0) {
    $wordCount = 1;

    for ($i = 0; $i < $length; $i++) {
        if ($input[$i] == ' ') {
            $wordCount++;
        }
    }
}

echo "Total words: " . $wordCount;
?>
