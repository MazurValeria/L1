<?php
$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

$arr = array();
$count = 0;
foreach ($arr as $count => $value){
    $count++;
}
echo $count, $eol;

