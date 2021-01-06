<?php

class CommunityhumberController extends Controller {

	function __construct($controller, $action) {
	
		parent::__construct($controller, $action);
        $this->_view->set('page_title','CommunityHumber');
    }

	function index($arg=false) {

	}

}