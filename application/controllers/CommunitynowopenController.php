<?php

class CommunitynowopenController extends Controller {

	function __construct($controller, $action) {
	
		parent::__construct($controller, $action);
        $this->_view->set('page_title','CommunityNowOpen');
    }

	function index($arg=false) {

	}

}