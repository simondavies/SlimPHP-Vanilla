<?php

//-- init the composer autoloader
require __DIR__ . '/../vendor/autoload.php';

//-- Lets start the process of loading all the start/set up files
$app = require_once __DIR__ . '/../App/begin.php';

//-- run the app
$app->run();
