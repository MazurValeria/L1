<?php
$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

$months = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December',
];

foreach ($months as $value) {
    echo $value == date('F') ? "<strong>{$value}</strong><br>\n" : "{$value}<br>\n";
}