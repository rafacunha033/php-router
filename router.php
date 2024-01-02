<?php

require __DIR__ . '/vendor/autoload.php';

use App\Router;

$router = new Router();
$router->addRoute("GET", "/home", function() {
    echo 'hi';
});

$router->dispatch($_SERVER["REQUEST_METHOD"], $_SERVER["REQUEST_URI"]);