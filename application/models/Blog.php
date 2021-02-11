<?php

class Blog extends Model {

	function get_all_category(){

		$query = "	SELECT * 
					FROM  blog_category";

		return $this->db->query($query);
	}

	function get_category_by_id($id){

		$query = "	SELECT * 
					FROM  blog_category
					WHERE id = $id";

		return $this->db->query($query);
	}


	function get_all_article(){

		$query = "	SELECT * 
					FROM blog_article ORDER BY updated DESC";

		return $this->db->query($query);
	}

	function get_article_by_id($id){

		$query = "	SELECT * 
					FROM blog_article
					WHERE id = $id";

		return $this->db->query($query);
	}

	function get_article_by_url($url){

		$query = "	SELECT * 
					FROM blog_article
					WHERE url = '$url'";

		return $this->db->query($query);
	}

}











