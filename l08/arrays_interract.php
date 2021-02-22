<?php

$data = [];

$data['name'] = readline('Enter your name: ');
$data['age'] = readline('Enter your age: ');
$data['gender'] = readline('Enter your gender: ');
$data['programmingLanguages'][] = readline('Enter some languages: ');
$data['programmingLanguages'][] = readline('Enter some languages: ');
$data['programmingLanguages'][] = readline('Enter some languages: ');

print_r($data);