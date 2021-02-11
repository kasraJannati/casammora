<?php

class CommunityboltonController extends Controller {

	function __construct($controller, $action) {
	
		parent::__construct($controller, $action);
        $this->_view->set('page_title','CommunityBolton');
    }

	function index($arg=false) {

		$property = new Property();
		$communities = $property->get_all_customproperties(5);
		$this->setVariable('communities', $communities);

		$property = new Property();
		$policy = $property->get_all_customproperties(2);
		$this->setVariable('policy', $policy);
	}

}