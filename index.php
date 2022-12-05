<?php

include_once 'autoload.php';

use application\core\Router;

$router = new Router;

try {
    $router->run();
} catch (Exception $e) {
    echo $e->getMessage();
}