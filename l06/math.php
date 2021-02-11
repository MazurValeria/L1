<?php

echo 1 + 2, PHP_EOL;
echo 1 - 2, PHP_EOL;
echo 1 * 2, PHP_EOL;
echo 1 / 2, PHP_EOL;
echo 543 * 0.2, PHP_EOL;// 20%

echo 3 % 2, PHP_EOL;// ostatok 1
echo 3 % 5, PHP_EOL;// ostatok 3, to esti ne smogli na 5 podeliti
echo 8 % 5, PHP_EOL;// ostatok 3

echo 3 ** 2, PHP_EOL;// cislo vo vtoroi stepeni
echo 3 ** 5, PHP_EOL;

$result = 0;
$result = $result + 2;
$result += 2;// ta je samaia operatia no uproshionnaia, mojno s liubim operatorom
$result += 5;
$result *= 14;
$result /= 2;
echo $result, PHP_EOL;

$number = 5;
$number +=1;
$number++;//dobavleaet 1 k nashemu cislu, post-increment, posle vizova
$number--;//ubavleaet 1, post-decrement, posle vizova
echo $number, PHP_EOL;

$number2 = 5;
++$number2;//pre-increment
--$number2;//pre-decrement
echo $number2, PHP_EOL;
echo ++$number2, PHP_EOL;//rabotaet srazu
echo $number2++, $number2, PHP_EOL;//srabativaet dlea sledushego vizova, snaceala pokajet 5, potom 6

echo $number2++ + ++$number2, PHP_EOL;// budet 12, 5+7
