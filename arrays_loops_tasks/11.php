<?php

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

for ($i = 2; $i < 100; $i++)
if ($i % 2 == 0)
{
    echo $i , $eol;
}
