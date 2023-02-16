<?php

echo "Hello World";

require_once __DIR__.'/vendor/autoload.php';
use app\core\Application;

$app = new Application();

$router = new Router();

$route->get('/', function(){
    return "Hello World";
});

$app->userRouter($router);

$app->run();