<?php 

$message = "Hello World";
$length = strlen($message);
for( $i = $length; $i> 0; $i--){
    echo $message[$i];
}