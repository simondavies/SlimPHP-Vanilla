<?php
/**
 * App Route files
 */

use SlimVanilla\Controllers\Home as Home;

//-- Homepage controller
$app->get('/', function() use ($app) {
    //-- init home controller
    $controller = new Home($app);
    $controller->index();
})->name('home');
