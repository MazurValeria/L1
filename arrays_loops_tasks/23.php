<?php
$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

    $n = [];
    $n = readline('Enter your number: ');
    $nstr = $n . "";

    $sum = 0;
    for ($i = 0; $i < strlen($nstr); ++$i)
    {
        $sum += $nstr[$i];
    }
    echo $sum, PHP_EOL;



