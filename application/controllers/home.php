<?php

class Pages extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('home_view', $data);
		}
		else
		{
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('home', 'refresh');
	}

	public function view($page = 'home'){
		if(!file_exists(APPPATH.'/views/pages/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst($page); // ucfirst capitalizes the first letter

		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}

}