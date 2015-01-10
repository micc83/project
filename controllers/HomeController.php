<?php

namespace MyApp\Controllers;

class HomeController extends BaseController {

	function getIndex () {
		return $this->twig->render('home.php', array(
			'name' => 'Alessandro Benoit'
		));
	}

	function getPage () {
		return false;
	}

}