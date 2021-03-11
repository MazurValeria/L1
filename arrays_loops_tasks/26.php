<?php
$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[] = rand(1, 100);
}

print_r($array);

$multiply = $array[0];

for ($i = 2; $i < count($array); $i += 2) {
    if ($array[$i] > 0) {
        $multiply *= $array[$i];
    }
}
echo $multiply, PHP_EOL;

foreach ($array as $key => $value) {
    if ($value > 0 && $key % 2) {
        echo $value, PHP_EOL;
    }
}// pokazati kakie imenno tzifri mi budem umnojati