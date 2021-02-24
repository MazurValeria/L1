<?php

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

for ($i = 1; $i < 101; $i++) {
    echo $i, $eol;
}

