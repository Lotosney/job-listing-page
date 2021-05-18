<?php
require_once('lib/Template.php');

require_once 'config.php';
require_once 'helpers/system_helper.php';
spl_autoload_register(function ($class_name) {
    include 'lib/' . $class_name . '.php';
});