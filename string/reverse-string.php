//reverse string word

<?php
function reverseWords($s) {
    // Trim leading and trailing spaces
    $s = trim($s);

    // Split the string into words using spaces as the delimiter
    $words = preg_split('/\s+/', $s);

    // Reverse the array of words
    $words = array_reverse($words);

    // Join the words back into a single string with a single space between them
    $reversedString = implode(' ', $words);

    return $reversedString;
}




// Test cases
echo reverseWords(" i like this program very much ") . "\n"; // Output: "much very program this like i"
echo reverseWords(" pqr mno ") . "\n"; // Output: "mno pqr"
echo reverseWords(" a ") . "\n"; // Output: "a"
?>
