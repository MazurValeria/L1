<?php

require_once __DIR__ . '/components/Application.php';
require_once __DIR__ . '/components/web/Request.php';
require_once __DIR__ . '/models/User.php';

spl_autoload_register(function(string $class) {
    $rout = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php'
        if (!file_exists($rout)) {
            throw new Exception("Class {$class} can not be loaded");
        }
    require_once $rout;
});

$user = new models\User();
$webRequest = new components\web\Request();
$cliRequest = new components\cli\Request
$app = new components\Application();

var_dump($webRequest, $cliRequest, $user, $app);