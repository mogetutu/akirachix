<?php
// Load the config
require './application/config/config.php';

// Load the application
function __autoload($class_name)
{
  include_once './application/lib/' . $class_name . '.php';
}

// Run Application
$app = new Application();

$app;
