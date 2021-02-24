<?php

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

$arr = [
    'Коля' => '200',
    'Вася' => '300',
    'Петя' => '400',
];
 foreach ($arr as $index => $data) {

     echo "{$index} - зарплата {$data}{$eol}";
 }
