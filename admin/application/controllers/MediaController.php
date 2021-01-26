<?php

class MediaController extends Controller {

	private $_authentication;
	function __construct($controller, $action) {
	
		parent::__construct($controller, $action);

		$this->_authentication = new Authentication();
		if (!$this->_authentication->logged_in()) 	
			header("Location: " . BASEURL . "login");
	}

	function index($arg=false){
	}
}