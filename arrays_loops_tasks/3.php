<?php

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

$result = 0;
$group = array(26, 17, 136, 12, 79, 15,);

foreach($group as $value) {
    $result += $value * 2;
}
echo $result, $eol;
