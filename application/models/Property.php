<?php

class Property extends Model {

	function get_all_properties($type = 0){

		$query = "	SELECT * 
					FROM  properties WHERE type = $type ORDER BY sort_order";

		return $this->db->query($query);
	}

	function get_properties_by_id($id){

		$query = "	SELECT * 
					FROM  properties
					WHERE id = $id";

		return $this->db->query($query);
	}

	function get_signature_properties(){

		$query = "	SELECT * 
					FROM  properties
					WHERE is_signature = 1";

		return $this->db->query($query);
	}

	function delete_properties($where){

		return $this->db->delete('properties', $where);
	}

	function insert_properties($value){

		return $this->db->insert('properties', $value);
	}

	function update_properties($value, $where){

		return $this->db->update('properties', $value, $where);
	}



	



	function get_all_customproperties($type = 0){

		$query = "	SELECT * 
					FROM  customproperty WHERE type = $type ORDER BY sort_order";

		return $this->db->query($query);
	}

	function get_customproperties_by_id($id){

		$query = "	SELECT * 
					FROM  customproperty
					WHERE id = $id";

		return $this->db->query($query);
	}

	function delete_customproperty($where){

		return $this->db->delete('customproperty', $where);
	}

	function insert_customproperty($value){

		return $this->db->insert('customproperty', $value);
	}

	function update_customproperty($value, $where){

		return $this->db->update('customproperty', $value, $where);
	}






}











