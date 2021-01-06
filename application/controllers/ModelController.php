<?php

class ModelController extends Controller {

	function __construct($controller, $action) {
	
		parent::__construct($controller, $action);
        $this->_view->set('page_title','Model');
    }

	function index($arg=false) {
	}
}