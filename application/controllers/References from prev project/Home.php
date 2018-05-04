<?php 
 
class Home extends CI_Controller{

function __construct(){
		parent::__construct();		
		 if(!$this->session->userdata('username'))
			redirect('login');
		
		$this->load->model('Model_futsal');
	}


public function index(){

		// $data = $this->Model_futsal->tampil_lapangan();
		$this->load->view('Home');	
	}



} ?>