<?php
require_once('lib/Template.php');

// function __autoload($class_name){
// 	require_once 'lib/'.$class_name. '.php';
// }

spl_autoload_register(function ($class_name) {
    include 'lib/' . $class_name . '.php';
});