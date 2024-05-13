<?php

// filter students with gender

$students = [
    'john' => ['age'=>12, 'gender'=>'male'],
    'jane' => ['age'=>13, 'gender'=>'female'],
    'david'=> ['age'=>14, 'gender'=>'male'],
    'jenny'=> ['age'=>15, 'gender'=>'female'],
];

$maleStudents = array_filter($students, function($student) {
    return $student['gender'] === 'male';
});

print_r($maleStudents);