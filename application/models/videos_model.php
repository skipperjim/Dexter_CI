<?php
class Videos_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function getVideos($slug = FALSE){
		if($slug === FALSE){
			$query = $this->db->get('videos');
			return $query->result_array();
		}

		$query = $this->db->get_where('videos', array('slug' => $slug));
		return $query->row_array();
	}

}