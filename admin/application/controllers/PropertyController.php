<?php

class PropertyController extends Controller {

	private $_authentication;
	private $session = false;
	function __construct($controller, $action) {
	
		parent::__construct($controller, $action);

		$this->_authentication = new Authentication();
		if (!$this->_authentication->logged_in()) 	
			header("Location: " . BASEURL . "login");

		$this->session = new Session();
	}

	function index($arg=false){
		print_r($arg);
		$this->render = 0;
	}

	

	function commercial($arg=false){
		$properties = $this->_model->get_all_properties(2);

		$this->session->set('property_type', 'commercial');
		$this->_view->set('property_type', 'commercial');
		$this->_view->set('properties', $properties);
	}

	function addproperty($arg=false){

		$this->_view->set('property_type', $this->session->get('property_type'));
	}
	function addproperty_action($arg=false){
		$this->render =0;

		$property_type = $this->session->get('property_type');

		$type = 0;
		// if($property_type == 'communities') $type = 1;
		if($property_type == 'commercial') $type = 2;

		$value = array(
			'title' => isset($_POST['title'])?$_POST['title']:'',
			'sub_title' => isset($_POST['sub_title'])?$_POST['sub_title']:'',
			'short_description' => Helper::sanitize(isset($_POST['short_description'])?$_POST['short_description']:''),
			'description' => Helper::sanitize(isset($_POST['description'])?$_POST['description']:''),
			'hero_image' => isset($_POST['hero_image'])?$_POST['hero_image']:'',
			'logo' => isset($_POST['logo'])?$_POST['logo']:'',
			'status' => isset($_POST['status'])?$_POST['status']:'',
			'is_signature' => isset($_POST['is_signature'])?$_POST['is_signature']:'',
			'map_lat' => isset($_POST['map_lat'])?$_POST['map_lat']:'',
			'map_lng' => isset($_POST['map_lng'])?$_POST['map_lng']:'',
			'sqft' => isset($_POST['sqft'])?$_POST['sqft']:'',
			'bedroom' => isset($_POST['bedroom'])?$_POST['bedroom']:'',
			'garage' => isset($_POST['garage'])?$_POST['garage']:'',
			'bathroom' => isset($_POST['bathroom'])?$_POST['bathroom']:'',
			'microsite' => isset($_POST['microsite'])?$_POST['microsite']:'',
			'commuting' => isset($_POST['commuting'])?$_POST['commuting']:'',
			'activities' => isset($_POST['activities'])?$_POST['activities']:'',
			'dining' => isset($_POST['dining'])?$_POST['dining']:'',
			'entertainment' => isset($_POST['entertainment'])?$_POST['entertainment']:'',
			'education' => isset($_POST['education'])?$_POST['education']:'',

			'tenents' => isset($_POST['tenents'])?$_POST['tenents']:'',
			'address' => isset($_POST['address'])?$_POST['address']:'',
			'contact' => isset($_POST['contact'])?$_POST['contact']:'',
			'brochure' => isset($_POST['brochure'])?$_POST['brochure']:'',

			'image1' => isset($_POST['image1'])?$_POST['image1']:'',
			'image2' => isset($_POST['image2'])?$_POST['image2']:'',
			'image3' => isset($_POST['image3'])?$_POST['image3']:'',
			'image4' => isset($_POST['image4'])?$_POST['image4']:'',
			'image5' => isset($_POST['image5'])?$_POST['image5']:'',
			'image6' => isset($_POST['image6'])?$_POST['image6']:'',
			'image7' => isset($_POST['image7'])?$_POST['image7']:'',
			'image8' => isset($_POST['image8'])?$_POST['image8']:'',
			'image9' => isset($_POST['image9'])?$_POST['image9']:'',
			'image10' => isset($_POST['image10'])?$_POST['image10']:'',

			'progress_image1' => isset($_POST['progress_image1'])?$_POST['progress_image1']:'',
			'progress_image2' => isset($_POST['progress_image2'])?$_POST['progress_image2']:'',
			'progress_image3' => isset($_POST['progress_image3'])?$_POST['progress_image3']:'',
			'progress_image4' => isset($_POST['progress_image4'])?$_POST['progress_image4']:'',
			'progress_image5' => isset($_POST['progress_image5'])?$_POST['progress_image5']:'',
			'progress_image6' => isset($_POST['progress_image6'])?$_POST['progress_image6']:'',
			'progress_image7' => isset($_POST['progress_image7'])?$_POST['progress_image7']:'',
			'progress_image8' => isset($_POST['progress_image8'])?$_POST['progress_image8']:'',
			'progress_image9' => isset($_POST['progress_image9'])?$_POST['progress_image9']:'',
			'progress_image10' => isset($_POST['progress_image10'])?$_POST['progress_image10']:'',

			'progress_image_alt1' => isset($_POST['progress_image_alt1'])?$_POST['progress_image_alt1']:'',
			'progress_image_alt2' => isset($_POST['progress_image_alt2'])?$_POST['progress_image_alt2']:'',
			'progress_image_alt3' => isset($_POST['progress_image_alt3'])?$_POST['progress_image_alt3']:'',
			'progress_image_alt4' => isset($_POST['progress_image_alt4'])?$_POST['progress_image_alt4']:'',
			'progress_image_alt5' => isset($_POST['progress_image_alt5'])?$_POST['progress_image_alt5']:'',
			'progress_image_alt6' => isset($_POST['progress_image_alt6'])?$_POST['progress_image_alt6']:'',
			'progress_image_alt7' => isset($_POST['progress_image_alt7'])?$_POST['progress_image_alt7']:'',
			'progress_image_alt8' => isset($_POST['progress_image_alt8'])?$_POST['progress_image_alt8']:'',
			'progress_image_alt9' => isset($_POST['progress_image_alt9'])?$_POST['progress_image_alt9']:'',
			'progress_image_alt10' => isset($_POST['progress_image_alt10'])?$_POST['progress_image_alt10']:'',

			'sort_order' => isset($_POST['sort_order'])?$_POST['sort_order']:0,
			'type' => $type
		);

		$this->_model->insert_properties($value);

		// if($property_type == 'communities') header("Location: " . BASEURL . "property/communities");
		// if($property_type == 'commercial') header("Location: " . BASEURL . "property/commercial");


		echo "asdajsgdjhkjasd";
	}

	function editproperty($arg=false){

		$property = $this->_model->get_properties_by_id($arg[0]);

		// echo '<pre>';
		// print_r($property);
		// echo '</pre>';

		$this->_view->set('property_type', $this->session->get('property_type'));
		$this->_view->set('_', $property[0]);
	}

	function editproperty_action($arg=false){
		$this->render =0;

		$property_type = $this->session->get('property_type');

		$type = 0;
		// if($property_type == 'communities') $type = 1;
		if($property_type == 'commercial') $type = 2;

		$value = array(
			'title' => isset($_POST['title'])?$_POST['title']:'',
			'sub_title' => isset($_POST['sub_title'])?$_POST['sub_title']:'',
			'short_description' => Helper::sanitize(isset($_POST['short_description'])?$_POST['short_description']:''),
			'description' => Helper::sanitize(isset($_POST['description'])?$_POST['description']:''),
			'hero_image' => isset($_POST['hero_image'])?$_POST['hero_image']:'',
			'logo' => isset($_POST['logo'])?$_POST['logo']:'',
			'status' => isset($_POST['status'])?$_POST['status']:'',
			'is_signature' => isset($_POST['is_signature'])?$_POST['is_signature']:'',
			'map_lat' => isset($_POST['map_lat'])?$_POST['map_lat']:'',
			'map_lng' => isset($_POST['map_lng'])?$_POST['map_lng']:'',
			'sqft' => isset($_POST['sqft'])?$_POST['sqft']:'',
			'bedroom' => isset($_POST['bedroom'])?$_POST['bedroom']:'',
			'garage' => isset($_POST['garage'])?$_POST['garage']:'',
			'bathroom' => isset($_POST['bathroom'])?$_POST['bathroom']:'',
			'microsite' => isset($_POST['microsite'])?$_POST['microsite']:'',
			'commuting' => isset($_POST['commuting'])?$_POST['commuting']:'',
			'activities' => isset($_POST['activities'])?$_POST['activities']:'',
			'dining' => isset($_POST['dining'])?$_POST['dining']:'',
			'entertainment' => isset($_POST['entertainment'])?$_POST['entertainment']:'',
			'education' => isset($_POST['education'])?$_POST['education']:'',

			'tenents' => isset($_POST['tenents'])?$_POST['tenents']:'',
			'address' => isset($_POST['address'])?$_POST['address']:'',
			'contact' => isset($_POST['contact'])?$_POST['contact']:'',
			'brochure' => isset($_POST['brochure'])?$_POST['brochure']:'',

			'image1' => isset($_POST['image1'])?$_POST['image1']:'',
			'image2' => isset($_POST['image2'])?$_POST['image2']:'',
			'image3' => isset($_POST['image3'])?$_POST['image3']:'',
			'image4' => isset($_POST['image4'])?$_POST['image4']:'',
			'image5' => isset($_POST['image5'])?$_POST['image5']:'',
			'image6' => isset($_POST['image6'])?$_POST['image6']:'',
			'image7' => isset($_POST['image7'])?$_POST['image7']:'',
			'image8' => isset($_POST['image8'])?$_POST['image8']:'',
			'image9' => isset($_POST['image9'])?$_POST['image9']:'',
			'image10' => isset($_POST['image10'])?$_POST['image10']:'',

			'progress_image1' => isset($_POST['progress_image1'])?$_POST['progress_image1']:'',
			'progress_image2' => isset($_POST['progress_image2'])?$_POST['progress_image2']:'',
			'progress_image3' => isset($_POST['progress_image3'])?$_POST['progress_image3']:'',
			'progress_image4' => isset($_POST['progress_image4'])?$_POST['progress_image4']:'',
			'progress_image5' => isset($_POST['progress_image5'])?$_POST['progress_image5']:'',
			'progress_image6' => isset($_POST['progress_image6'])?$_POST['progress_image6']:'',
			'progress_image7' => isset($_POST['progress_image7'])?$_POST['progress_image7']:'',
			'progress_image8' => isset($_POST['progress_image8'])?$_POST['progress_image8']:'',
			'progress_image9' => isset($_POST['progress_image9'])?$_POST['progress_image9']:'',
			'progress_image10' => isset($_POST['progress_image10'])?$_POST['progress_image10']:'',

			'progress_image_alt1' => isset($_POST['progress_image_alt1'])?$_POST['progress_image_alt1']:'',
			'progress_image_alt2' => isset($_POST['progress_image_alt2'])?$_POST['progress_image_alt2']:'',
			'progress_image_alt3' => isset($_POST['progress_image_alt3'])?$_POST['progress_image_alt3']:'',
			'progress_image_alt4' => isset($_POST['progress_image_alt4'])?$_POST['progress_image_alt4']:'',
			'progress_image_alt5' => isset($_POST['progress_image_alt5'])?$_POST['progress_image_alt5']:'',
			'progress_image_alt6' => isset($_POST['progress_image_alt6'])?$_POST['progress_image_alt6']:'',
			'progress_image_alt7' => isset($_POST['progress_image_alt7'])?$_POST['progress_image_alt7']:'',
			'progress_image_alt8' => isset($_POST['progress_image_alt8'])?$_POST['progress_image_alt8']:'',
			'progress_image_alt9' => isset($_POST['progress_image_alt9'])?$_POST['progress_image_alt9']:'',
			'progress_image_alt10' => isset($_POST['progress_image_alt10'])?$_POST['progress_image_alt10']:'',

			'sort_order' => isset($_POST['sort_order'])?$_POST['sort_order']:0,
			'type' => $type
		);

		$where = array(
			'id' => $_POST['id'],
		);
		$this->_model->update_properties($value, $where);

		// if($property_type == 'communities') header("Location: " . BASEURL . "property/communities");
		if($property_type == 'commercial') header("Location: " . BASEURL . "property/commercial");
	}




	function deleteproperty($arg=false){
		$this->render =0;

		$where = array(
			'id' => $_POST['id']
		);
		$this->_model->delete_properties($where);

		$property_type = $this->session->get('property_type');

		// if($property_type == 'communities') header("Location: " . BASEURL . "property/communities"); 
		if($property_type == 'commercial') header("Location: " . BASEURL . "property/commercial");
	}



/*****/
	function homepage($arg=false){
		$properties = $this->_model->get_all_customproperties(1);

		$this->session->set('property_type', 'homepage');
		$this->_view->set('property_type', 'homepage');
		$this->_view->set('properties', $properties);
	}
	function policypage($arg=false){
		$properties = $this->_model->get_all_customproperties(2);

		$this->session->set('property_type', 'policypage');
		$this->_view->set('property_type', 'policypage');
		$this->_view->set('properties', $properties);
	}
	function aboutpage($arg=false){
		$properties = $this->_model->get_all_customproperties(3);

		$this->session->set('property_type', 'aboutpage');
		$this->_view->set('property_type', 'aboutpage');
		$this->_view->set('properties', $properties);
	}
	function slideshow($arg=false){
		$properties = $this->_model->get_all_customproperties(4);

		$this->session->set('property_type', 'slideshow');
		$this->_view->set('property_type', 'slideshow');
		$this->_view->set('properties', $properties);
	}
	function communities($arg=false){
		$properties = $this->_model->get_all_customproperties(5);

		$this->session->set('property_type', 'communities');
		$this->_view->set('property_type', 'communities');
		$this->_view->set('properties', $properties);
	}
/*****/
	

	function addcustomproperty($arg=false){
		$this->_view->set('property_type', $this->session->get('property_type'));
	}

	function addcustomproperty_action($arg=false){
		$this->render =0;

		$property_type = $this->session->get('property_type');

		$type = 0;

		if($property_type == 'aboutpage') $type = 3;
		if($property_type == 'policypage') $type = 2;
		if($property_type == 'homepage') $type = 1;
		if($property_type == 'slideshow') $type = 4;
		if($property_type == 'communities') $type = 5;



		$value = array(
			'title' => isset($_POST['title'])?$_POST['title']:'',
			'sub_title' => isset($_POST['sub_title'])?$_POST['sub_title']:'',
			'short_description' => isset($_POST['short_description'])?$_POST['short_description']:'',
			'description' => isset($_POST['description'])?$_POST['description']:'',

			'architech' => isset($_POST['architech'])?$_POST['architech']:'',
			'location' => isset($_POST['location'])?$_POST['location']:'',

			'hero_image' => isset($_POST['hero_image'])?$_POST['hero_image']:'',
			'logo' => isset($_POST['logo'])?$_POST['logo']:'',

			'type' => $type,
			'sort_order' => isset($_POST['sort_order'])?$_POST['sort_order']:0,

			'image1' => isset($_POST['image1'])?$_POST['image1']:'',
			'image2' => isset($_POST['image2'])?$_POST['image2']:'',
			'image3' => isset($_POST['image3'])?$_POST['image3']:'',
			'image4' => isset($_POST['image4'])?$_POST['image4']:'',
			'image5' => isset($_POST['image5'])?$_POST['image5']:'',
			'image6' => isset($_POST['image6'])?$_POST['image6']:'',
			'image7' => isset($_POST['image7'])?$_POST['image7']:'',
			'image8' => isset($_POST['image8'])?$_POST['image8']:'',
			'image9' => isset($_POST['image9'])?$_POST['image9']:'',
			'image10' => isset($_POST['image10'])?$_POST['image10']:''
		);

		$this->_model->insert_customproperty($value);

	
		if($property_type == 'aboutpage') header("Location: " . BASEURL . "property/aboutpage");
		if($property_type == 'homepage') header("Location: " . BASEURL . "property/homepage");
		if($property_type == 'policypage') header("Location: " . BASEURL . "property/policypage");
		if($property_type == 'slideshow') header("Location: " . BASEURL . "property/slideshow");
		if($property_type == 'communities') header("Location: " . BASEURL . "property/communities");


	
	}


	function editcustomproperty($arg=false){
		$property = $this->_model->get_customproperties_by_id($arg[0]);

		// echo '<pre>';
		// print_r($property);
		// echo '</pre>';

		$this->_view->set('property_type', $this->session->get('property_type'));
		$this->_view->set('_', $property[0]);
	}

	function editcustomproperty_action($arg=false){
		$this->render =0;

		$property_type = $this->session->get('property_type');

		$type = 0;
		
		if($property_type == 'aboutpage') $type = 3;
		if($property_type == 'policypage') $type = 2;
		if($property_type == 'homepage') $type = 1;
		if($property_type == 'slideshow') $type = 4;
		if($property_type == 'communities') $type = 5;





		$value = array(
			'title' => isset($_POST['title'])?$_POST['title']:'',
			'sub_title' => isset($_POST['sub_title'])?$_POST['sub_title']:'',
			'short_description' => isset($_POST['short_description'])?$_POST['short_description']:'',
			'description' => isset($_POST['description'])?$_POST['description']:'',

			'architech' => isset($_POST['architech'])?$_POST['architech']:'',
			'location' => isset($_POST['location'])?$_POST['location']:'',

			'hero_image' => isset($_POST['hero_image'])?$_POST['hero_image']:'',
			'logo' => isset($_POST['logo'])?$_POST['logo']:'',

			'type' => $type,
			'sort_order' => isset($_POST['sort_order'])?$_POST['sort_order']:0,

			'image1' => isset($_POST['image1'])?$_POST['image1']:'',
			'image2' => isset($_POST['image2'])?$_POST['image2']:'',
			'image3' => isset($_POST['image3'])?$_POST['image3']:'',
			'image4' => isset($_POST['image4'])?$_POST['image4']:'',
			'image5' => isset($_POST['image5'])?$_POST['image5']:'',
			'image6' => isset($_POST['image6'])?$_POST['image6']:'',
			'image7' => isset($_POST['image7'])?$_POST['image7']:'',
			'image8' => isset($_POST['image8'])?$_POST['image8']:'',
			'image9' => isset($_POST['image9'])?$_POST['image9']:'',
			'image10' => isset($_POST['image10'])?$_POST['image10']:''
		);

		$where = array(
			'id' => $_POST['id'],
		);
		$this->_model->update_customproperty($value, $where);


		if($property_type == 'aboutpage') header("Location: " . BASEURL . "property/aboutpage");
		if($property_type == 'policypage') header("Location: " . BASEURL . "property/policypage");
		if($property_type == 'homepage') header("Location: " . BASEURL . "property/homepage");
		if($property_type == 'slideshow') header("Location: " . BASEURL . "property/slideshow");
		if($property_type == 'communities') header("Location: " . BASEURL . "property/communities");




	}

	function deletecustomproperty($arg=false){
		$this->render =0;

		$where = array(
			'id' => $_POST['id']
		);
		$this->_model->delete_customproperty($where);

		$property_type = $this->session->get('property_type');

	
		if($property_type == 'aboutpage') header("Location: " . BASEURL . "property/aboutpage");
		if($property_type == 'homepage') header("Location: " . BASEURL . "property/homepage");
		if($property_type == 'policypage') header("Location: " . BASEURL . "property/policypage");
		if($property_type == 'slideshow') header("Location: " . BASEURL . "property/slideshow");
		if($property_type == 'communities') header("Location: " . BASEURL . "property/communities");


		
	}




}












