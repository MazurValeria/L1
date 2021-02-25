<?php

function test()
{
    echo 'Random number is: ' . mt_rand() . PHP_EOL;
}
//test(); vizov functii
//echo __FUNCTION__, PHP_EOL; uznati v kakoi seiceas rabotaem functii

//(function (){
  //  echo 'Random number is: ' . mt_rand() . PHP_EOL;
//})();// vizov anonimnoi functii cerez collable

//function (){
 //   echo 'Random number is: ' . mt_rand() . PHP_EOL;
//}

$anonimous = function (){
    echo 'Random number is: ' . mt_rand() . PHP_EOL;
};
$anonimous();// vizov peremennoi v kotoroi anonimnaia functia
var_dump($anonimous);//esli eio tak vizvati to uvidim v nei object closure

//function oddNumbers($value){
//    return $value % 2 === 0;
//}
//$array = [1, 2, 3, 4, 5, 6, 7, 8];
//$array = array_filter($array, 'oddNumbers' );
//var_dump(($array));

$array = [1, 2, 3, 4, 5, 6, 7, 8];
$array = array_filter($array, function ($value){
    return $value % 2 === 0;
});
var_dump(($array));

var_dump(random_int(1, 4));// vnutri argumenti functii

function sayHello(string $name, int $age, string $gender, string $suffix = '!', string...$spells){
    echo "Hello, dear {$name}, {$age} years old, {$gender} {$suffix}<br>";
    var_dump($spells);
}// znacenie po umolceaniu v peremennoi suffix i mi eio potom ne vizvali no ona otobrazilasi

sayHello('Dmitrii', 22, 'male');// teperi vnutri parametri na vihode
sayHello('Olia', 34, 'female', '? WTF ?', 'Patronus');
sayHello('Vika', 36, 'female', '!','Awada cedawra', 'Alohomora');

//sayHello(age: 12, name: 'Draco', suffix: '???', gender: 'male');// v php8 mojno i tak pisati

//sayHello('Fail', 'male', '33');// esli mi ukazali tip argumenta i vveli ne to cito nado, to dast oshiibku, takaia zashita

function intSum(int...$ints): void//functia bez returna, nicego ne vozvrasheaet
{
    //var_dump($ints);
    //$ints = func_get_args(); ustarevshee
    echo array_sum($ints), '<br>';
}

intSum(1, 2, 4, 6, 7);// functia prinimaet neogranicennoe kol argumentov ... i peremennaia
function game(int $number): bool
{
    return $number === random_int(1, 10);
}
$isWinner = game(5);// zapisati rezulitat v functiu

var_dump($isWinner);

$data = 123;

//function hiding()
//{
   // $data2 = 222;
  //  var_dump($data);// dast oshibku, potomu cito peremennaia za predelami functii
//}
//hiding();

//var_dump($data, $data2);

function hiding($insideData)
{
    $insideData = 8888;
    var_dump($insideData);
    return $insideData;
}
$data = hiding($data);

var_dump($data);

//function hiding(&$insideData)- ssilocinaia peremennaia, ssilka na eceiku pameati na odni i te je dannie, to esli perepishet znacenie iznutri na vneshniuiu peremennuiu
//ssilki eto ne ocevidnii kod

function globals()
{
    global $data;// vzeali iz globalinoi oblasti vidimosti i izmenili eio
    $data = 333;
    var_dump($data);
}

globals();















