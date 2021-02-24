<?php

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

$n = 1000;
$num = 0;
while ($n >= 50) {
    $n /=2;
    $num ++;
}
echo $num, $eol;




