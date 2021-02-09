<?php

$fruit = 'Orange';
echo $fruit, PHP_EOL;
echo $fruit, PHP_EOL;

$fruit = 'Apple';
echo $fruit, PHP_EOL;
echo $fruit, PHP_EOL;

$fruit = 123;
echo $fruit, PHP_EOL;

//Fails:
// test = 123; $ is required
// $1test = 123; no numbers on start
// $te#st = 123; no special symbols
// $te st = 123; no spaces

//Available
$t1wq = 123;
$_tes_t = 123;

//$all_students_list = []; old snake case

//$allStudentsList = []; new camel case

//$minSum = 12; use only readable names for variables

$test = 'TEST';
$link = &$test;

var_dump($test, $link);

$test = 123;
//$link = 22222;

var_dump($test, $link);

var_dump(1 + 1);

$var1 = 'querty';
$querty = 'test123';
$$var1 = 11156;

var_dump($querty, $querty * 2);