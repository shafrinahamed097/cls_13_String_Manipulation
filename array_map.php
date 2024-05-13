<?php

$numbers = [1,2,3,4,5,6,7,8,9,10];

//map

$doubleNumbers = array_map(function($number){
    return $number * 2;
}, $numbers);

print_r($doubleNumbers);