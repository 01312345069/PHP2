<?php
$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($string) {
    $vowels = 'aeiouAEIOU';
    $count = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if (strpos($vowels, $string[$i]) !== false) {
            $count++;
        }
    }
    return $count;
}

foreach ($strings as $originalString) {
    $vowelCount = countVowels($originalString);
    $reversedString = strrev($originalString);
    echo "Original String: $originalString, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>
