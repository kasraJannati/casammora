<?php

class HomeController extends Controller {

	function __construct($controller, $action) {
	
		parent::__construct($controller, $action);
        $this->_view->set('page_title','Home');
    }

	function index($arg=false) {
	}

}