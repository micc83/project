<?php

namespace MyApp\Controllers;

use \Twig_Loader_Filesystem;
use \Twig_Environment;

class BaseController {

	var $twig;

	function __construct () {

		$loader = new Twig_Loader_Filesystem('./views');
		$this->twig = new Twig_Environment($loader, array(
		    'cache' => './cache/templates',
		));
		
	}

}