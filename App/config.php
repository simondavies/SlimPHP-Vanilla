<?php
/**
 * Application config details
 */

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

//-- main slim configs
$app->config([
    'debug' => true,
    'templates.path' => __DIR__ . getenv('TEMPLATE_PATH'),
    'view' => new \Slim\Views\Twig()
]);

// Create monolog logger and store logger in container as singleton
// (Singleton resources retrieve the same log resource definition each time)
$app->container->singleton('log', function () use ($app) {
    $log = new \Monolog\Logger($app->getName());
    $log->pushHandler(new \Monolog\Handler\StreamHandler(__DIR__ . getenv('LOGS_PATH'), \Monolog\Logger::DEBUG));
    return $log;
});

//-- views
$view = $app->view();
$view->parserOptions = [
    'charset' => 'utf-8',
    'cache' => __DIR__ . getenv('TEMPLATE_PATH') . '/cache',
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true,
    'debug' => true
];

$view->parserExtensions = [
    new \Slim\Views\TwigExtension()
];

//-- load the db connection details
$db_settings = require_once 'database.php';

//-- set up Laravel's Eloquent
$capsule = new Capsule;
$capsule->addConnection($db_settings);
$capsule->setEventDispatcher(new Dispatcher(new Container));
$capsule->bootEloquent();


