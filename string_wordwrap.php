<?php

/*
 String word wrapping is the process of breaking a long string of text into multiple
 lines to fit within a specific width. It's essential for improving readability and preventing
 text from over flowing its container.

*/
$message = "Lorem ipsum dolor sit amet eeeeeeeconsectetur adipisicing elit. Eligendi tenetur nam adipisci eum pariatur expedita veritatis amet vitae. Asperiores possimus blanditiis autem sapiente ex. Possimus iste cum explicabo deleniti ut.";
// echo wordwrap($message,20,"\n", false);

// chunk split

echo chunk_split($message, 10, "|");