<?php

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

$array = ['html', 'css', 'php', 'js', 'jq',];
foreach ($array as $value) {
    echo $value, $eol;
}


