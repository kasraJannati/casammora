<?php

class AboutController extends Controller {

	function __construct($controller, $action) {
	
		parent::__construct($controller, $action);
        $this->_view->set('page_title','About');
    }

	function index($arg=false) {

		$property = new Property();
		$about_nav = $property->get_all_customproperties(3);
		$this->setVariable('about', $about_nav);


		$property = new Property();
		$policy = $property->get_all_customproperties(2);
		$this->setVariable('policy', $policy);


	}

}

