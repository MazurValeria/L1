<?php

//var_dump($_SERVER['REQUEST_URI']);
//
//require_once __DIR__ . '/controllers/IndexController.php';
//$controllers = new \controllers\IndexController();
//$controllers->actionIndex();
//
//require_once __DIR__ . '/controllers/ProfileController.php';
//$controllers = new \controllers\ProfileController();
//$controllers->actionView();

require_once __DIR__ . '/components/Autoloader.php';
$autoloader = new \components\Autoloader(__DIR__);
spl_autoload_register([$autoloader, 'load']);

$config = require __DIR__ . '/configs/main.php';

$result = \components\App::init($config)->run();
echo $result;