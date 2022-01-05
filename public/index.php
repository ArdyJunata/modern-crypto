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
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('rsa/generate', ['controller' => 'Rsa', 'action' => 'generateKey']);
$router->add('rsa/encrypt', ['controller' => 'Rsa', 'action' => 'encrypt']);
$router->add('rsa/decrypt', ['controller' => 'Rsa', 'action' => 'decrypt']);

$router->add('aes/encrypt', ['controller' => 'Aes', 'action' => 'encrypt']);
$router->add('aes/decrypt', ['controller' => 'Aes', 'action' => 'decrypt']);
    
$router->dispatch($_SERVER['QUERY_STRING']);
