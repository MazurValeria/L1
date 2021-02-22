<?php

$programmingLanguages = [
    'PHP',
    'JS',
    'C++',
    'JAVA',
    'GO',
    'Kotlin',
];
asort($programmingLanguages);//kliuci peremeshalisi no znacenia po alfavitu
arsort($programmingLanguages);//ne po alfavitu, naoborot
shuffle($programmingLanguages);//peremeshivaet znacenia v massive randomno

print_r($programmingLanguages);

$numbers = [
    '66',
    '3',
    '8',
    '10',
    '43',
    '111',
    '1',
    '200',//staviti zapeatuiu v kontze, cisla kak cislo mojno ili kak string mejdu kovicek
];

asort($numbers);

print_r($numbers);


$students = [
    [
        'name' => 'L',
        'age' => '21',
    ],
    [
    'name' => 'L',
    'age' => '38',
],
[
'name' => 'L',
        'age' => '25',
    ],
 [
     'name' => 'L',
     'age' => '31',
 ],
 [
 'name' => 'L',
        'age' => '44',
    ],
 [
     'name' => 'L',
     'age' => '29',
 ],
];

uasort($students, static function (array $a, array $b) {
   return $a['age'] <=> $b['age'];
   // if ($a['age'] === $b['age']) {
   //     return 0;
   // }
 //   return $a['age'] < 4b['age'] ? -1 : 1;
});
print_r($students);
