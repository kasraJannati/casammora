<?php

class NewsController extends Controller {

	function __construct($controller, $action) {
	
		parent::__construct($controller, $action);
        $this->_view->set('page_title','News');
    }

	function index($arg=false) {

		$property = new Property();
		$policy = $property->get_all_customproperties(2);
		$this->setVariable('policy', $policy);


	}

}