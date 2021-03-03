<?php
$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

$weekDays = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday',
];
$weekendDays = [
    'Saturday',
    'Sunday',
];

foreach ($weekDays as $value) {
    echo in_array($value, $weekendDays) ? "<strong>{$value}</strong><br>\n" : "{$value}<br>\n";
}
