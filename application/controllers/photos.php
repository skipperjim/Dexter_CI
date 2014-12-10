<?php
class Photos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('photos_model');
	}

	public function index(){
		$data['photos'] = $this->photos_model->getPhotos();
		$data['title'] = "Dexter's Photo Album";

		$this->load->view('templates/header', $data);
		$this->load->view('photos/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug){
		$data['photos'] = $this->photos_model->getPhotos($slug);

		if(empty($data['photo'])){
			show_404();
		}

		$data['title'] = $data['photo']['file_name'];

		$this->load->view('templates/header', $data);
		$this->load->view('photos/view', $data);
		$this->load->view('templates/footer');
	}

}