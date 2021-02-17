<?php

$x = is_integer(123);

if($x == 1) {
    echo 1, PHP_EOL;
}
if($x == 2) {
    echo 2, PHP_EOL;
}
if($x == 3) {
    echo 3, PHP_EOL;
}


$firstFigure = readLine('Insert first figure:');
$secondFigure = readLine('Insert second figure:');
$operator = readLine('Insert operator:');

    if ($operator == '+') {
        echo "Answer is: " .$firstFigure +$secondFigure, PHP_EOL;
    }
    if ($operator == '-') {
        echo "Answer is: " .$firstFigure - $secondFigure, PHP_EOL;
    }
    if ($operator == '*') {
        echo "Answer is: " .$firstFigure * $secondFigure, PHP_EOL;
    }
    if ($operator == '/') {
        echo "Answer is: " .$firstFigure / $secondFigure, PHP_EOL;
    }
