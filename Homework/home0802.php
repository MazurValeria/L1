<?php

if (isset($_POST['submit'])) {
    $result1 = $_POST['number1'];
    $result2 = $_POST['number2'];
    $operator = $_POST['operator'];
    switch ($operator) {

        case 'Add':
            echo $result1 + $result2;
        case 'Subtract':
            echo $result1 - $result2;
        case 'Multiply':
            echo $result1 * $result2;
        case 'Divide':
            echo $result1 / $result2;
    }
}

