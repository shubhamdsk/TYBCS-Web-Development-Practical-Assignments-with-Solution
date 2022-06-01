<!-- 1. Design a HTML form to accept a string .Write a
PHP script for the following.
a) Write a function to count the total number of
Vowels from the string.
 b) Show the occurrences of each Vowel from
the string.  -->

<?php

$s1 = $_GET['str'];

$string = strtolower($s1);
$cnt = 0;

$vowels = array("a" => 0, "e" => 0, "i" => 0, "o" => 0, "u" => 0);

for ($i = 0; $i < strlen($string); $i++) {
    if (strtolower($string[$i]) == 'a') {
        ++$cnt;
        ++$vowels['a'];
    }
    if (strtolower($string[$i]) == 'e') {
        ++$cnt;
        ++$vowels['e'];
    }
    if (strtolower($string[$i]) == 'i') {
        ++$cnt;
        ++$vowels['i'];
    }
    if (strtolower($string[$i]) == 'o') {
        ++$cnt;
        ++$vowels['o'];
    }
    if (strtolower($string[$i]) == 'u') {
        ++$cnt;
        ++$vowels['u'];
    }
}

echo "<h1>Total number of vowels found : " . $cnt . "<h1>";
echo "Occurence of 'a' : " . $vowels['a'] . "<br>";
echo "Occurence of 'e' : " . $vowels['e'] . "<br>";
echo "Occurence of 'i' : " . $vowels['i'] . "<br>";
echo "Occurence of 'o' : " . $vowels['o'] . "<br>";
echo "Occurence of 'u' : " . $vowels['u'] . "<br>";

?>