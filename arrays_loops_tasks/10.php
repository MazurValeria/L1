<?php

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

for ($i = 11; $i < 34; $i++) {
    echo $i, $eol;
}
