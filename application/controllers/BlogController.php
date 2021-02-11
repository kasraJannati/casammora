<?php

class BlogController extends Controller {

	function __construct($controller, $action) {
	
		parent::__construct($controller, $action);
        $this->_view->set('page_title','Blog');
    }

	function index($arg=false) {


		$property = new Property();
		$policy = $property->get_all_customproperties(2);
		$this->setVariable('policy', $policy);

	}

}