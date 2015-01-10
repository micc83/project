<?php

use Symfony\Component\Debug\Debug;

/**
 * Require config file
 */
$config = require dirname(__FILE__) . "/config.php";

/**
 * Debug
 */
if ( $config['debug'] ) {
	Debug::enable();
}

