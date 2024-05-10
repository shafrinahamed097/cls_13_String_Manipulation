<?php

// convert string to array

$string = "hello from world";
$stringWords = explode(", ", $string);
$backtoString = implode(", ", $stringWords);

print_r($stringWords);
print_r($backtoString);