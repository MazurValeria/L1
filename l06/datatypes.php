<?php

$int = 1;
$float = 1.002;
$string = 'test';
$boolean = true;// 1 bite pameati
//$boolean = false; cito-to esti no ego seiceas net
$array = [1, 2, 'test'];
$object = new stdClass();
$null = null; //eto pustota, 0 bite pameati, otsutstvie presutstvia

$file = fopen(__DIR__ . 'math.php','rb');// otkrili file kak resurs i budem ego citati postepenno
fclose($file);// ne zabivaem zakrivati file kotorii otkrili kak resurs

$collable = static functiom () {

};//ispolneaemii tip dannih, annonimnie functii, mojem etou functiu vizvati i peredati v drugoe mesto
