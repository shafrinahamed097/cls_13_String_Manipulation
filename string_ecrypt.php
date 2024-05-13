<?php

// ASCII code

// echo ord("q") ."\n";
// echo chr(113);

/*
 String encryption is the process of converting plaintext (readable text) into
 ciphertext (unreadable) to protect it from unauthorized access. There're many 
 different methods for encrypting, each with its strengths and weaknesses.

*/



function encrypt($message){
    $message = str_split($message);
    $newMessage = "";
    foreach($message as $char){
        $newMessage .= chr(ord($char)+1);
    }
    return $newMessage;
}

echo encrypt("I Love You") ."\n";


// reverse of this function

function decrypt($message){
    $message = str_split($message);
    $newMessage = "";
    foreach($message as $char){
        $newMessage .= chr(ord($char)-1);
    }
    return $newMessage;
}

echo decrypt("J!Mpwf!Zpv");