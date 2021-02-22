<?php

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';// esli v konsole to phpeol esli v brawsere to br
/*
for ($i = 0; $i < 5; $i++) {
    echo $i, $eol;
}
for ($i = 0; $i >0; $i += 2) {
    echo $i, $eol;
}// beskonecinii loop

$time = time();
for ($i = 0; time() - $time < 10; $i += 2) {
    echo $i, '>>', date('Y-m-d H:i:s'), $eol;
}// poka ne proidiot 10 secund ne ostanovitsa loop

$time = time();
for ($i = 0; time() - $time < 10; $i += 2) {
    echo $i, '>>', date('Y-m-d H:i:s'), $eol;
    sleep(1);
}//ne bolishe odnoi iteratzii v sekundu

$time = time();
for ($i = 0; time() - $time < 10; $i += 2) {
   }
echo $i, $eol;// posmotreti skoliko iteratzii za 1 sec

for ( ; ;) {
    $rand = random_int( 1, 5);
    echo $rand, $eol;

    if ($rand === 3) {
        break;
    }
    sleep(1);
}// ostanoviti kogda cislo budet 3

$rand = 0;
for ( ; $rand !== 3;) {
    $rand = random_int( 1, 5);
    echo $rand, $eol;

    sleep(1);
}// v uslovii govorim cito poka cislo ne ravno 3

$array = [
    0 => 'test',
    1 => 'querty',
    2 => '12345',
    ];

$count = count($array);
for ($i = 0; $i < count($array); $i++){
    echo $array[$i], $eol;
}

$handle = fopen(__DIR__ . 'multiply_table.php', 'rb');
while ($line = fgets($handle)){
    echo $line;
}
fclose($handle); // citaem file poka on ne zakoncitsa i gets ne verniot false

echo $eol;

$arrayWhile = $array;
while($arrayWhile){
    echo array_shift($arrayWhile). $eol;
}

echo $eol;
*/
$data = [1, 2, 3, 6, 8, 9];
do {
    $number = random_int(1, 10);
    echo $number, $eol;
} while (in_array($number, $data));// snaceala vipolneat, potom provereaet esli ok/ esli s pervogo raza ne ugadal to cislo kotorogo net, to budet eshio probovati

