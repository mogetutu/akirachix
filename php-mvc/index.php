<?php
// Load config file
require './application/config/config.php';

// Load application.php and controller.php
require './application/lib/controller.php';
require './application/lib/application.php';

// Create new instance of Application Class
// Run Application
$app = new Application;
