<?php
class Videos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('videos_model');
	}

	public function index(){
		$data['videos'] = $this->videos_model->getVideos();
		$data['title'] = "Dexter's video Album";

		$this->load->view('templates/header', $data);
		$this->load->view('videos/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug){
		$data['videos'] = $this->videos_model->getVideos($slug);

		if(empty($data['video'])){
			show_404();
		}

		$data['title'] = $data['video']['file_name'];

		$this->load->view('templates/header', $data);
		$this->load->view('videos/view', $data);
		$this->load->view('templates/footer');
	}

}