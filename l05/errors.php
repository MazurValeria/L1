<?php

error_reporting(E_ALL ^ E_WARNING);

var_dump($t);

error_reporting(E_ERROR);

$array = [];

var_dump($t);
var_dump(1 / 0);
var_dump($array['t']);

error_reporting(E_NOTICE);

error_reporting(E_DEPRECATED);

//error_reporting(0); v interface ne budet oshibok, no budut v logah v dockere v containere
//error_reporting(E_ALL ^ E_WARNING); pokazati vse oshibki, no ne pokazivati warningi
//error_reporting(E_DEPRECATED); esli ispolizovan ustarevshii cod
//error_reporting(E_ERROR); fatalinie oshibki