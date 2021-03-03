<?php
$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

for($i=1;$i<=5;$i++){
    for($row=1;$row<=$i;$row++){
        echo "xx";
    }
    echo "<br />";
}
