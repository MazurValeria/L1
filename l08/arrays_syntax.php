<?php
/*
$programLanguagesOld = array(
    0 => 'PHP',
    1 => 'JS',
    2 => 'C++',
    3 => 'JAVA',
    4 => 'GO',
    5 => 'Kotlin',


);
*/
$programLanguagesNew = [
    'PHP',
    'JS',
    'C++',
    'JAVA',
    'GO',
    'Kotlin',
    [
        'HTML',
        'CSS',
        'XHTML',
    ]// vlojennii massiv
];
$programLanguagesNew[] = 'C#';
$programLanguagesNew[9] = 'Scala';
$programLanguagesNew[4] = 'HTML';// esli kliuci uje sushestvuet to on perepishet znacenie preamo v massive
$programLanguagesNew[] = 'Python';// esli opeati hootim vstaviti v konetz massiva to on poishet maksimalinii index

unset($programLanguagesNew[4], $programLanguagesNew[10]);// udalenie peremennoi s ukazaniem kliucika

$student = [
    'name' => 'Vasilii',
    'age' => 22,
    'isGoodBoy' => true,
    'gender' => 'male',
    'programmingLanguages' => $programLanguagesNew
];

//$student[] = 'TEST';// budet kliuci 0, tak vibral interpretator

unset($student['programmingLanguages'][6]);// v peremennoi svoi dannie, v massive kopia dannih iz peremennoi

print_r($student);
print_r($programLanguagesNew);

var_dump($student['name']);
echo "{$student['name']} ({$student['age']} years old), {$student['gender']}", PHP_EOL;// vivesti dannie na ekran v odnu stroku

var_dump($student['programmingLanguages'][1]);// dostup k vlojennomu elementu massiva, ukazivaem ego kliuci

