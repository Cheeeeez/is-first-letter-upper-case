<?php
function isFirstLetterUpperCase($str)
{
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo "$str's first character is uppercase";
    } else {
        echo "$str's first character is not uppercase";
    }
}

isFirstLetterUpperCase('Codegym');
echo "<br>";
isFirstLetterUpperCase('codegym');
echo "<br>";
isFirstLetterUpperCase('Nguyen van Nam');
echo "<br>";
isFirstLetterUpperCase('NGUYEN VAN NAM');
echo "<br>";
isFirstLetterUpperCase('nguyen van Nam');
echo "<br>";