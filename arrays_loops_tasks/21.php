<?php
$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';


for ($i = 1; $i <= 9; $i++) {
    for ($row = 1; $row <= $i; $row++) {
        echo $i;
    }
    echo "<br>";
}