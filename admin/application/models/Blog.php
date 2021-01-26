<?php

class Blog extends Model {


	

	function get_category(){

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

	function delete_category($where){

		return $this->db->delete('blog_category', $where);
	}

	function insert_category($value){

		return $this->db->insert('blog_category', $value);
	}

	function update_category($value, $where){

		return $this->db->update('blog_category', $value, $where);
	}





	function get_article(){

		$query = "	SELECT * 
					FROM blog_article";

		return $this->db->query($query);
	}

	function get_article_by_id($id){

		$query = "	SELECT * 
					FROM blog_article
					WHERE id = $id";

		return $this->db->query($query);
	}

	function insert_article($value){

		return $this->db->insert('blog_article', $value);
	}
	function delete_article($where){

		return $this->db->delete('blog_article', $where);
	}

	function update_article($value, $where){

		return $this->db->update('blog_article', $value, $where);
	}




}











