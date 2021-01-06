<?php

class CommunityboltonController extends Controller {

	function __construct($controller, $action) {
	
		parent::__construct($controller, $action);
        $this->_view->set('page_title','CommunityBolton');
    }

	function index($arg=false) {

	}

}