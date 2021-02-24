<?php

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

$group = [2, 5, 9, 15, 0, 4];
foreach ($group as $i)
    if ($i > 3 & $i < 10)
        echo $i, $eol;
