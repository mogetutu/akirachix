<?php
// Load config file
require './application/config/config.php';

// Load application.php
require './application/lib/application.php';

// Create new instance of Application Class
$app = new Application;

// Run Application
echo "<pre>";
var_dump($app);
echo "</pre>";
