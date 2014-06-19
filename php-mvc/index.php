<?php
// Load the config
require './application/config/config.php';

// Load models
function __autoload($class_name)
{
  include_once './application/models/' . $class_name . '.php';
}

// Load the application
require './application/lib/controller.php';
require './application/lib/application.php';

// Run Application
$app = new Application();

$app;
