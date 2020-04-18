<?php
    require_once __DIR__ . '/src/bramus/router/Router.php';

    // Create a Router
    $router = new \bramus\router\Router();
    
    $router->get('/', function () {
        echo 'hey'
    });
    
    $router->run();
