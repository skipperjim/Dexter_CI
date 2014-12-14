<?php
class Game extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('game_model');
	}

	public function index(){
		$data['title'] = "Dexter's Interactive Website Game!";

		$this->load->view('templates/header', $data);
		$this->load->view('game/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug){
		$this->load->view('templates/header', $data);
		$this->load->view('game/view', $data);
		$this->load->view('templates/footer');
	}

}