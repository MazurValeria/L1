<?php

    $result1 = readLine ('Insert number1');
    $result2 = readLine ('Insert number2');
    $operator = readLine ('Insert operator');

    if ($operator == '+') {
            echo $result1 + $result2;}
    if ($operator == '-') {
            echo $result1 - $result2;}
    if ($operator == '*') {
            echo $result1 * $result2;}
    if ($operator == '/') {
            echo $result1 / $result2;}
