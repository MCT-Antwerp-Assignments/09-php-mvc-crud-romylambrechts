<?php

/**
 * Load all composer packages and make sure our classes get loaded via PSR-4 autoloading
 */
require_once "../vendor/autoload.php";

use Core\Core;
use Core\Router;

/**
 * Initialize the Core class
 * - Start sessions
 * - Register whoops error handling
 */
Core::Init();

/**
 * Create a new Router instance and add routes to it
 */
$router = new Router();
$router->add("/", "HomeController", "index");

$router->add("login", "LoginController", "showLoginForm");
$router->add("authenticate", "LoginController", "authenticate");
$router->add("logout", "LoginController", "logout");

$router->add('add', 'AddController', 'showAddForm');

$router->add('update/{id}', 'UpdateController', 'showUpdateForm');
$router->add('save/{id?}', 'SaveController', 'save');
$router->add('delete/{id?}', 'DeleteController', 'delete');

/**
 * Dispatch the router
 */
$uri = trim($_SERVER['REQUEST_URI'], '/');
$router->dispatch($uri);
