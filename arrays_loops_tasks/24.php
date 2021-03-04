<?php
$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';


    $number = (readline('Enter your number: ') ['number']) ? ['number'] : false;
    $digit = (readline('Enter your number: ') ['digit']) ? ['digit'] : false;
    if (is_numeric($number) && is_numeric($digit) && strlen($digit) == 1) {
        // String -> array
        $digits = str_split($number);
        $counts = array_count_values($digits);
        $count = isset($counts[$digit]) ? $counts[$digit] : 0;
        $result = "<p>Number{$number} contains {$count} of given {$digit}</p>\n";
    }

var_dump($result);
