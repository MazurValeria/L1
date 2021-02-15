<?php

var_dump(3 == 3);
var_dump(1 == 3);
var_dump(1 != 1);//ne ravno
var_dump('test' == 'querty');

echo "1 === '1'>>>";
var_dump(1 === '1');
echo "1 !== '1'>>>";
var_dump(1 !== '1');// strogo ne razvo, 1 ne ravneaetsa strocinomu 1
var_dump(0 === false);

var_dump(1 > 3);
var_dump('2020-05-02'>= '2020-05-01');
var_dump('2020-05-02'> '2020-05-01');
var_dump(1 >= 1);

var_dump(1 < 3);
var_dump('2020-05-02'<= '2020-05-01');
var_dump('2020-05-02'< '2020-05-01');
var_dump(1 <= 1);

$minSalary = 350;
$maxSalary = 700;
$salary = random_int(300, 1000);

$isFineSalary = $salary >= $minSalary && $salary <= $maxSalary;

var_dump($salary, $salary >= $minSalary, $salary <= $maxSalary);
var_dump($salary, $salary >= $minSalary && $salary <= $maxSalary);//esli pervoe uslovie ne vipolneno to srazu vidaiot false i sprava ne vipolneaet
var_dump($salary, $salary >= $minSalary and $salary <= $maxSalary);
var_dump($salary, $salary >= $minSalary || $salary <= $maxSalary);// vipolneatsa poka ne naidiot polojitelinii rezulitat ili poka ne zakonceatsa uslovia
var_dump($salary, $salary >= $minSalary or $salary <= $maxSalary);

var_dump($salary, $salary >= $minSalary && $salary <= $maxSalary && $salary != 666);

