<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->model('Model_futsal');
                //$this->load->library('encryption');
	}

	public function index(){
		$this->load->view('Front');	
	}

// 	public function aksi_login(){
// 		$username = $this->input->post('username');
// 		$password = $this->input->post('password');
// 		$sha1 = sha1($password);
// 		$cek = $this->Model_futsal->login($username,$sha1);
// 		$where = array(
// 			'username' =>$username,
// 			'password' =>$sha1
// 			);
		
// 		if($cek==true){
// 	    	$this->session->set_userdata('cek', TRUE);
// 	    	if($_SESSION['cek']==true){
// 	    		// $this->session->set_userdata('akses',TRUE);
// 		    	$this->session->set_userdata('username', $username);

// 		    	redirect('Front/loginUser');
// 	    	}
    	
//             }	else{
//                 	$message = "Username / Password salah";
// 					echo "<script type='text/javascript'>alert('$message');window.location.href='".site_url('')."';</script>";
// 	  		//$this->load->view('Home');
// 		}
// 	}

// 	public function loginUser()
// 	{
// 		if($this->session->userdata('username'))
// 		{
// 			redirect('Front/readDataUser');
// 		}else{
// 			redirect('Front/login');}}

//     public function login()
// 	{
// 		if($this->session->userdata('username')){
// 			redirect('Front/admin');
// 		}else{
// 			$message = "Username / Password Salah";
// 			echo "<script type='text/javascript'>alert('$message');window.location.href='".site_url('')."';</script>";
// 		}
// 	}

// 	public function logout()
// 	{
// //		if($this->session->userdata('username'))
// 		{
// 			$this->session->sess_destroy();
//                 redirect('');}}
        
	

// 	public function komentar()
// 	{
// 		if($this->session->userdata('username'))
// 		{
// 			redirect('Front/readDataUser');
// 		}else{
// 			redirect('Front/login');}}
            

// 	public function admin()
// 	{
// 		if($this->session->userdata('username'))
// 		{
//             redirect('Front/komentar');
// 		}else{
//             redirect('Front/login');}}

	
// 	public function readDataUser() {
// 	    //$this->load->view('Komentar', array('data' => $this->My_Model->getDataKomentar()));
// //            $data = $this->My_Model->getDataKomentar();
// //            $this->load->view('Komentar', array('data' => $data)); 
//             //$data=$this->My_Model->getDataKomentar('komentar','','')->result_array();
//             //-$kirim['data']  = $data;

// 			$message = "Anda berhasil login";
// 			echo "<script type='text/javascript'>alert('$message');window.location.href='".site_url('home')."';</script>";
// 			//redirect('home');
//             $this->load->view('Home');
//   	}
}

?>