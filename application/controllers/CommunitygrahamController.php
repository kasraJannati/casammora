<?php

class CommunitygrahamController extends Controller {

	function __construct($controller, $action) {
	
		parent::__construct($controller, $action);
        $this->_view->set('page_title','CommunityGraham');
    }

	function index($arg=false) {

	}

}