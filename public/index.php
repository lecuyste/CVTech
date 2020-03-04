<?php
date_default_timezone_set('Europe/Paris');
session_start();


// Autoloader (namespace)
require('../app/Autoloader.php');
\App\Autoloader::register();
// Instance de PDO
$app = \App\App::getInstance();
// Routes
require('../config/routes.php');
