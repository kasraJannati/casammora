<?php

class ContactController extends Controller {

	function __construct($controller, $action) {
	
		parent::__construct($controller, $action);
        $this->_view->set('page_title','Contact');
    }

	function index($arg=false) {

	}

}