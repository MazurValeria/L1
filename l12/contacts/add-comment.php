<?php
$data = $_POST;

//var_dump($data);

//var_dump($_REQUEST, $_POST, $_GET);// get budet pustoi, post i request odinakovie

$file =__DIR__ . '/storage/' . date('Y-m-d') . '.json';

$storage = fopen($file, 'wb');

fclose($storage);

