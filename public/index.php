<?php

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';


/**
 * Error and Exception handling
 */
session_start();
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('login', ['controller' => 'LoginController', 'action' => 'index']);
$router->add('logout', ['controller' => 'LoginController', 'action' => 'logout']);
$router->add('loginPost', ['controller' => 'LoginController', 'action' => 'login']);
$router->add('register', ['controller' => 'RegisterController', 'action' => 'index']);
$router->add('registerPost', ['controller' => 'RegisterController', 'action' => 'register']);
    
$router->dispatch($_SERVER['QUERY_STRING']);
