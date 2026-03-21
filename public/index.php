<?php

require_once "../vendor/autoload.php";

use Core\core;
use Core\Router;

Core::Init();

$router = new Router();
$router->add('/', 'HomeController', 'index');

$uri = trim($_SERVER['REQUEST_URI'], '/');
$router-> dispatch($uri);
