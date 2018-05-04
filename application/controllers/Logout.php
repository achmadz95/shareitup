<?php

class Logout extends CI_Controller{

public function index(){
		
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('nama_user');
		$this->session->unset_userdata('isAdmin');
		$this->session->unset_userdata('username');
		redirect('Login'); 

	}


}
?>