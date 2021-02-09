<?php
$Bar = "a";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";
$a = "Hello";

echo $a, PHP_EOL;
echo $$a, PHP_EOL;
echo $$$a, PHP_EOL;
echo $$$$a, PHP_EOL;
echo $$$$$a, PHP_EOL;

?>
/*

$a; //Returns Hello
$$a; //Returns World
$$$a; //Returns Foo
$$$$a; //Returns Bar
$$$$$a; //Returns a

$$$$$$a; //Returns Hello
$$$$$$$a; //Returns World
*/