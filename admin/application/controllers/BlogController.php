<?php

class BlogController extends Controller {

	private $_authentication;
	function __construct($controller, $action) {

		parent::__construct($controller, $action);

		$this->_authentication = new Authentication();
		if (!$this->_authentication->logged_in())
			header("Location: " . BASEURL . "login");
	}

	function index($arg=false){
		$this->render = 0;
	}


	function category($arg=false){

		$category = $this->_model->get_category();
		$this->_view->set('category', $category);
	}

	function addcategory($arg=false){


	}

	function addcategory_action($arg=false){

		$this->render =0;

		$url = trim(strtolower($_POST['name']));
		$url = str_replace(' ', '-', $url);
		$url = str_replace(',', '', $url);
		$url = str_replace('\'', '', $url);
		$url = str_replace('"', '', $url);
		$url = urlencode($url);
		$value = array(
			'name' => $_POST['name'],
			'url' => Helper::sanitize($url)
		);
		$this->_model->insert_category($value);

		header("Location: " . BASEURL . "blog/category");
	}

	function deletecategory($arg=false){
		$this->render =0;

		$where = array(
			'id' => $_POST['id']
		);
		$this->_model->delete_category($where);

		header("Location: " . BASEURL . "blog/category");
	}

	function editcategory($arg=false){

		$category_id = $arg[0];

		$category = $this->_model->get_category_by_id($category_id);
		$category = $category[0];

		$this->_view->set('category',$category);
	}

	function editcategory_action($arg=false){
		$this->render = 0;

		$url = trim(strtolower($_POST['name']));
		$url = str_replace(' ', '-', $url);
		$url = str_replace(',', '', $url);
		$url = str_replace('\'', '', $url);
		$url = str_replace('"', '', $url);
		$value = array(
			'name' => $_POST['name'],
			'url' => Helper::sanitize($url)
		);

		$where = array(
			'id' => $_POST['id'],
		);
		$this->_model->update_category($value, $where);

		header("Location: " . BASEURL . "blog/category");
	}






	function article($arg=false){

		$article = $this->_model->get_article();
		$category = $this->_model->get_category();

		$this->_view->set('category', $category);
		$this->_view->set('article', $article);
	}

	function addarticle($arg=false){


		$category = $this->_model->get_category();

		$this->_view->set('category', $category);
	}

	function addarticle_action($arg=false){

		$this->render =0;

		if(!isset($_POST['category'])) $_POST['category'] = array(0);

		$url = trim(strtolower($_POST['title']));
		$url = str_replace(' ', '-', $url);
		$url = str_replace(',', '', $url);
		$url = str_replace('\'', '', $url);
		$url = str_replace('"', '', $url);
		$value = array(
			'title' => Helper::sanitize($_POST['title']),
			'category_ids' => implode(', ', $_POST['category']). ', ',
			'image' => $_POST['image_file_last'],
			'short_description' => Helper::sanitize(trim($_POST['short_description'])),
			'content' => Helper::sanitize(trim($_POST['content'])),
			'active' => $_POST['active'],
			'url' => Helper::sanitize($url)
		);
		$this->_model->insert_article($value);

		header("Location: " . BASEURL . "blog/article");
	}

	function editarticle($arg=false){
		$article_id = $arg[0];

		$article = $this->_model->get_article_by_id($article_id);
		$article = $article[0];

		$category = $this->_model->get_category();

		$this->_view->set('article',$article);
		$this->_view->set('category', $category);
	}

	function editarticle_action($arg=false){
		$this->render = 0;

		if(!isset($_POST['category'])) $_POST['category'] = array(0);

		$url = trim(strtolower($_POST['title']));
		$url = str_replace(' ', '-', $url);
		$url = str_replace(',', '', $url);
		$url = str_replace('\'', '', $url);
		$url = str_replace('"', '', $url);
		$value = array(
			'title' => Helper::sanitize($_POST['title']),
			'category_ids' => implode(', ', $_POST['category']) . ', ',
			'image' => $_POST['image_file_last'],
			'short_description' => Helper::sanitize(trim($_POST['short_description'])),
			'content' => Helper::sanitize(trim($_POST['content'])),
			'active' => $_POST['active'],
			'url' => Helper::sanitize($url)
		);

		$where = array(
			'id' => $_POST['id']
		);
		$this->_model->update_article($value, $where);

		header("Location: " . BASEURL . "blog/article");
	}

	function deletearticle($arg=false){
		$this->render =0;

		$where = array(
			'id' => $_POST['id']
		);
		$this->_model->delete_article($where);

		header("Location: " . BASEURL . "blog/article");
	}








}
