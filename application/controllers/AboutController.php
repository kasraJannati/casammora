<?php

class AboutController extends Controller {

	function __construct($controller, $action) {
	
		parent::__construct($controller, $action);
        $this->_view->set('page_title','About');
    }

	function index($arg=false) {

	}

}