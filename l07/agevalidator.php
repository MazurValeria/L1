<?php

$age = readline('Enter your age: ');

if (!is_numeric($age)) {
    exit('Data is incorrect' . PHP_EOL);
}//uslovie esli dannie ne tzifra, to srazu vsio ostanavlivaetsa

$age = (int)$age;// validiruem tip dannih toliko tzifri

var_dump($age);

if ($age >= 18 && $age < 68) {
    echo 'You are welcome!', PHP_EOL;
} elseif($age >= 80) {
    echo 'You are too old', PHP_EOL;
} elseif($age < 10) {
    echo 'You are too young', PHP_EOL;
} else {
    echo 'Access denied!', PHP_EOL;
}// else zakrivaet if, elseif poseredine mejdu nimi, ne bolishe 1 elseif, lutshe pisati swithccase

echo PHP_EOL;

switch ($age) {
    case 33:
        echo 'Áge of Jesus', PHP_EOL;
        break;
    case $age >= 18 && $age < 68:
        echo 'You are welcome!', PHP_EOL;
        break;
    case $age >= 80:
        echo 'You are too old', PHP_EOL;
        break;
    case $age < 10:
        echo 'You are too young', PHP_EOL;
        break;
    default:
        echo 'Access denied!', PHP_EOL;
}// esli v case netu break to on budet idti v sledushee uslovie i vipolneat ego toje

var_dump('á' > 1);
var_dump('á' > '100000');