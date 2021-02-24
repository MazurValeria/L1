<?php

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

$en = array();
$ru = array();
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $en => $ru){
    echo $en, $eol;
    echo $ru, $eol;
}

