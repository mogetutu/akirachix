<?php
// Load the config
require './application/config/config.php';
// Load the Database Class
require './application/lib/database.php';

// Load models
require './application/models/friend.php';

// Load the application
require './application/lib/application.php';

// Run Application
$app = new Application();

$app->index();