<?php

class HomeController extends Controller {

	function __construct($controller, $action) {
	
		parent::__construct($controller, $action);
        $this->_view->set('page_title','Home');
    }

	function index($arg=false) {

		$property = new Property();
		$policy = $property->get_all_customproperties(2);
		$this->setVariable('policy', $policy);


		$property = new Property();
		$slideshow = $property->get_all_customproperties(4);
		$this->setVariable('slideshow', $slideshow);

		$property = new Property();
		$communities = $property->get_all_customproperties(5);
		$this->setVariable('communities', $communities);

		$property = new Property();
		$home = $property->get_all_customproperties(1);
		$this->setVariable('home', $home);
		

	}

}