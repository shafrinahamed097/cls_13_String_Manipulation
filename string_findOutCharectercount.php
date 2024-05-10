<?php

$message = "Quick Brown Fox Jumps Over The Lazy Dog";

// find out each character count

$characterCount =[];

$characterArray = str_split($message);

foreach ($characterArray as $char) {
  if(isset($characterArray[$char])) {
    $characterCount[$char]++;
  } else{
    $characterCount[$char] = 1;
  }
}

print_r($characterCount);
