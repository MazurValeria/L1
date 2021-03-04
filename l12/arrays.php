<?php

$source = [
    'test',
    123,
    [
        1, 2, 3
    ],
];

//$string = $source[0];
//$int = $source[1];
//$array = $source[2];

list($string, $int, $array) = $source;// razimenovanie

[$string, $int, $array] = $source;// razimenovanie

var_dump($string, $int, $array, $source);

function getData() : array
{
    return [
        'data' => [1, 2, 3],
        'page' => 1,
        'totalPages' => 10,
    ];
}

$data = getData()['data'];
var_dump($data);

extract(getData());//na osvone kliucei assotziativnogo massiva sozdast peremennie

var_dump($data, $page, $totalPages);

$newArray = compact('string', 'array', 'totalPages');//beret imena peremennih i sozdaiot assotziativnii massiv iz znacenii
$newArray = [
    'string'=> $string,
    'array'=> $array,
    'totalPages'=> $totalPages,
];// toje samoe cito vishe delaet compact
var_dump($newArray);