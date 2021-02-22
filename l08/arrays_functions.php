<?php

$programLanguages = [
    'PHP',
    'JS',
    'C++',
    'JAVA',
    'GO',
    'Kotlin',

];

array_push($programLanguages, 'C#');
//$programLanguages[] = 'C#';

var_dump(count($programLanguages));//poscitati na pervom urovne kolicestvo elementov v massive, on ne govorit cito eto massiv ili kakie tam dannie, on prosto smotrit na urovne C skoliko elementov

print_r($programLanguages);

$php = array_shift($programLanguages);

var_dump($php);

$other = [
    'HTML',
    'XHTML',
    'CSS',
    'HTML',
    'XHTML',
    'CSS',
];

$allLanguages = array_merge($programLanguages, $other);// soediniti massivi
print_r($allLanguages);

$keys = [
    'name',
    'age',
    'gender',
];
$values = [
    'Dmytro',
    22,
    'male',
];
$data = array_combine($keys, $values);
print_r($data);

array_unshift($programLanguages, $php);//vernuti to cito udaleno v massiv

array_shift($programLanguages);// beret pervii element massiva, srezaet ego iz massiva i ego vozvrasheaet

$student = [
    'name' => 'Vasilii',
    'age' => 22,
    'isGoodBoy' => true,
    'gender' => 'male',
];

print_r($student);
if (array_key_exists('name', $student)) {
    var_dump($student['name']);
} else {
    echo 'key "name" is required', PHP_EOL;
};
var_dump($student['name']);

print_r(array_unique($other));//pokajet toliko unikalinie dannie
