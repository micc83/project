<?php

/**
 * Require autoloader
 */
require dirname(__FILE__) . "/vendor/autoload.php";

/**
 * Require basic application logic
 */
require dirname(__FILE__) . "/start.php";

/**
 * Require router
 */
require dirname(__FILE__) . "/router.php";

$router = new router();

$router->add('GET', $config['home'] . '/', array('HomeController', 'getIndex'));

$router->add('GET', $config['home'] . '/page', array('HomeController', 'getPage'));

$router->start();
