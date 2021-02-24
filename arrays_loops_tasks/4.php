<?php

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $index => $data) {
    echo $index, $eol;
    }
foreach ($arr as $data => $index) {
    echo $index, $eol;
}