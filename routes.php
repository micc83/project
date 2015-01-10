<?php

$router = new MyApp\Components\Router();

/**
 * Routing rules
 */
$router->add('GET', $config['home'] . '/', array('HomeController', 'getIndex'));
$router->add('GET', $config['home'] . '/page', array('HomeController', 'getPage'));

$router->start();
