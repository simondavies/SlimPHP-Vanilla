<?php

//-- load the env file data
Dotenv::load(__DIR__ . '/../');

//-- Initiate the slim frame work
$app = new \Slim\Slim();

//-- Set up app name
$app->setName('SimonDavies\\SlimVanilla');

//-- load in the main app configurations
require_once  'config.php';

//-- load in the app rout file(s)
require_once 'routes.php';

return $app;

