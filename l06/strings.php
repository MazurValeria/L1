<?php

echo ('Test');
echo 'Hello world';
echo 'Other Hello', PHP_EOL;
echo 1, PHP_EOL;
echo 1, 1, 1, PHP_EOL;// vivodit neskoliko elementov srazu

print 'Smth';
print PHP_EOL;//toliko odin print v stroke

$g1 = print 123;
var_dump($g1); // vozvrashaet 1-true

$name = 'Dmytro';
echo "Hello {$name}\n";// mojno s figurnimi kovicikami
echo "Hello $name\n";//mojno bez fig skobok, no vnutri esti peremennaia i tak lucishe
echo 'Hello {$name}\n';//odinarmnie koviciki ne obrabotali peremennuiu
echo "Hello, user with \"{$name}\"\n";//ekranirovanie kovicek

$htmlId = 'test';
$nowdoc = <<<'HTML'
<script type="text/javascrript"
HTML;

$heredoc = <<<JS
document.getElementById('#{htmlId}');
JS;

echo $nowdoc, PHP_EOL;
echo $heredoc, PHP_EOL;

$concat = 'This string'
    . ' is concatenated'
    . PHP_EOL
    . 'From two strings'
    . PHP_EOL;
echo $concat;