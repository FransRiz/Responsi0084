<?php

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();


	}


	public function index() 
	{
		$data['judul'] = 'Halaman Home';
		$this->load->view('templates/header',$data);
		$this->load->view('Home/index.php');
		$this->load->view('templates/footer');
	}


}