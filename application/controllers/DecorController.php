<?php

class DecorController extends Controller {

	function __construct($controller, $action) {
	
		parent::__construct($controller, $action);
        $this->_view->set('page_title','Decor');
    }

	function index($arg=false) {

	}

}