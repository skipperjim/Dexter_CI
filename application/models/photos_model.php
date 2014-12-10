<?php
class Photos_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function getPhotos($slug = FALSE){
		if($slug === FALSE){
			$query = $this->db->get('photos');
			return $query->result_array();
		}

		$query = $this->db->get_where('photos', array('slug' => $slug));
		return $query->row_array();
	}

}