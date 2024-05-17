<?php
$strings = ["Hello", "World", "PHP", "Programming"];
foreach ($strings as $string) {
    $stringRev=strrev($string);
    $VowelCount=preg_match_all('/[aeiou]/i',$string,$matches);
 echo "Original String: $string, Vowel Count: $VowelCount, Reversed String: $stringRev"."<br>";
}
 