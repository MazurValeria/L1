<?php
$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

$array = [];
for ($i = 0; $i < 10; $i++) {
$array[] = rand(1, 200);
}

print_r($array);

$indexMax = array_search(max($array), $array);
$indexMin = array_search(min($array), $array);

echo $array[$indexMax], PHP_EOL;
echo $array[$indexMin], PHP_EOL;

list($array[$indexMin], $array[$indexMax]) = [$array[$indexMax], $array[$indexMin]];

print_r($array);


