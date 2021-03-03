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

$day = $weekDays[date('N') - 1];
foreach ($weekDays as $value) {
    echo $value == $day ? "<i>{$value}</i><br>\n" : "{$value}<br>\n";
}
