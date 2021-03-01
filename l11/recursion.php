<?php

//while (true){
// echo mt_rand() . '>>' . memory_get_usage() . ' bytes used ', PHP_EOL;
//  sleep(1);
//}// beskonecinii tzikl
//
//unction rec()
//{
//  echo mt_rand() . '>>' . memory_get_usage() . ' bytes used ', PHP_EOL;// function recursivnaia beskonecinaia potrebleaet mnogo pameati, proveriti skoliko
//  sleep(1);
//
// rec();
//}
//
//rec();

function power(int $number, int $power)
{
    echo memory_get_usage(), PHP_EOL;
    echo "{$number} ^ {$power} >>>", PHP_EOL;
    if ($power === 0) {
        return 1;//tocika vihoda
    }
    if ($power === 1) {
        return $number;// tocika vihoda
    }

    $result = $number * power($number, $power - 1);
    echo "{$number} ^ {$power} = {$result}", PHP_EOL;
    sleep(1);

    return $result;
}

//$power = power(3, 5);

//var_dump(power(3, 5), 3 ** 5);

/*
 * 3 ^ 3 = 3 * (3 ^ 2)
 * 3 ^ 2 = 3 * (3 ^ 1)
 * 3 ^ 1 = 3 - nacinaetsa rekursia kogda doshli do togo uslovia kotoroe vozmojno vipolniti, funtia zapominaet svoio sostoianie na kajdom shage. Viscitivaem 3 v 3ei stepeni
 */
//256 shagov vlojennosti rekursivnih vizovov maksimum

$counter = 0;

function fibonacci(int $n)
{
    static $storage = [];
    global $counter;
    $counter++;

    echo "{$counter} : {$n}", PHP_EOL;

    if ($n === 0){
        return 0;
}

    if ($n === 1) {
        return 1;
    }
    if (array_key_exists($n, $storage)){
        return $storage[$n];//sokratim kolicestvo rekursii potomu cito budem zapisivati znacenie v strogae i bolishe ego ne perescitivati a brati iz storage
    }

    var_dump($storage);
    $result = fibonacci($n - 1) + fibonacci($n - 2);

    $storage[$n] = $result;// v massiv dobavleaem novoe znacenie kotoroe viscitalosi

    sleep(1);

    return $result;

    // instrument dostijenia tocek vihoda
}

/*
 * 0 1 2 3 5 8 13 21 34
 */

$number = fibonacci(10);
var_dump($number, $counter);

/*
 *              3 =2
 *         2 =1     +     ?1 =1
 *     1   +    ?0
 *    razvetvlenie po levai ceasti poka ne viscitaet 1 i 0, potom idiot v pravuiu ceasti i iskati 1 i 0
 */

/*
 *                                      5
 *                                   4  +  ?3
 *                               3 + ?2
 *                            2 + ?1          1 + 0
 *                          1 + ?0 =1
 *
 */

$array =[
    1,
    2,
    3,
    'test' => [
        3,
        0,
        5 => [
            'test',
            'ttt',
            23 => [
                1,
                2,
            ]
        ]
    ]
];

ini_set('memory_limit', '1GB');// ukazivaem skoliko mi hotim operativki dlea etogo skripta, izmeneaem znacenie v php ini vremenno

function countRecursive($array)
{
    $count = 0;
    foreach ($array as $value){
        $count++;
        echo $count, PHP_EOL;// uvideti kak scitatet po urovneam
        if (is_array($value)){
            $count += countRecursive($value);
        }
    }

    return $count;
}
//var_dump(count($array));// poscitaet toliko pervii uroveni massiva
var_dump(countRecursive($array));