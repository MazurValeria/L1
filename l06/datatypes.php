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

var_dump((string)1.002);//preobrazovati cislo v stroku
var_dump((int)'521');// preobrazovati prosto cislo tzeloe
var_dump((int)'521');//nikakie plavaiushie esli vizvali integer
var_dump((float)'521.7');
var_dump((int)'521 eggs');//bukvi ne pokajutsa, toliko tzifri
var_dump((int)'eggs 521 ');// esli nacinaetsa ne s cisla voobshe pokajet 0 potomu cito eto nevalidnoe cislo
var_dump((int)true);
var_dump((int)false);// budet preobrazovivatisa pustaia stroka, 0, pustoi massiv, null, vsio pustoe
var_dump((bool)'0');
var_dump((bool)0);
var_dump((bool)'');
var_dump((bool)[]);
var_dump((bool)'test');
var_dump((bool)test);
var_dump((bool)'test');
var_dump((bool)[test]);

var_dump(is_int(1.1));
var_dump(is_int(1));
var_dump(is_string('1'));
var_dump(is_bool(false));
var_dump(is_array[1]);
var_dump(is_object(new stdClass()));
var_dump(is_numeric('1'));

var_dump(isset($t123));//pitaemsea vizvati nesushestvuiushiu peremennuiu i isset ne dast warning
//esli dannie esti no ego znaceni null to ona pokajet cito takoi peremennoi net

$t123 = null;
var_dump(isset($t123));//pokajet cito netu
var_dump($t123);//pokajet null

var_dump(empty );//provereaet pustie li dannnie
var_dump(empty(0));// budet true potomu cito eto pustota
var_dump(empty(12));// budet false potomu cito ne pusto, cito-to esti

var_dump();// pozvoleat posmotreti

echo null, PHP_EOL;
print null;

var_dump(null);