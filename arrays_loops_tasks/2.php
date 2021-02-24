<?php

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

$result = 0;
$group = [ 1, 20, 15, 17, 24, 35,];

foreach($group as $value) {
    $result += $value;
}
echo $result, $eol;