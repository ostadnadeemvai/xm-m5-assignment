<?php

$strings = ["Hello","World","PHP","Programming"];

function countVowels($string){
    $vowels = ["a","e","i","o","u"];
    $count = 0;
    foreach(str_split(strtolower($string)) as $char){
        if (in_array($char,$vowels)){
            $count++;
        }
    }
    return $count;
}

foreach($strings as $str){
    $vowelsCount = countVowels($str);
    $vowelsReverse = strrev($str);


    echo "Original String: $str\n";
    echo "Reverse String: $vowelsReverse\n";
    echo "Vowel Count: $vowelsCount\n";
    echo "---------------------------\n";
}

?>