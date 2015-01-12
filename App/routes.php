<?php
/**
 * App Route files
 */

use SimonDavies\SlimVanilla\Controllers\Home as Home;

//-- Homepage controller
$app->get('/', function() use ($app) {
    //-- init home controller
    $controller = new Home($app);
    $controller->index();
})->name('home');
