<?php

require_once('5_1_test_namespace.php');
define('TREE', "Baobab"); // global const


//echo TREE;  // дає значення константи
//echo Theory\MEGA; // видасть з включеного файлу
//echo Theory\CAR; // не видасть, бо константа глобальна

//echo defined('TREE'); // true - 1
//echo defined('CAR'); // true
//echo defined('Theory\MEGA'); // true
//echo defined('Theory\CAR'); // false
//echo PHP_OS;

const FOO_BAR = 1;
const DIR = __DIR__;
//define('DIR', "__DIR__");
echo FOO_BAR;
echo DIR;
