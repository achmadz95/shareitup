<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct() {
		parent::__construct();		
		if($this->session->userdata('id_user')) { // >>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME JIKA MEMBUKA HALAMAN LAIN <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('Home');
		}
		
		$this->load->helper('url');
		
                //$this->load->library('encryption');
	}

	public function index(){
		$user_id=$this->session->userdata('username');
 
	if($user_id){
 
  		$this->load->view('Home');
	}
 
		$this->load->view('Login');	
	}

	public function aksi_login(){ // Controller Login
		$user_login=array(
			'username'=>$this->input->post('username'),
			'password'=>sha1($this->input->post('password'))
 		);
		
		$data=$this->Model_futsal->login_user($user_login['username'],$user_login['password']);

		if($data){
	    	$this->session->set_userdata('id_user',$data['id_user']);
        	$this->session->set_userdata('nama_user',$data['nama_user']);
        	$this->session->set_userdata('username',$data['username']);
        	$this->session->set_userdata('saldo',$data['saldo']);
        	$this->session->set_userdata('isAdmin',$data['isAdmin']);
	    	//redirect('home');
	    	if ($this->session->userdata('isAdmin')==TRUE) { // Halaman Admin
				redirect('home_admin');
			}
			else if ($this->session->userdata('isAdmin')==FALSE) { // Halaman User
				redirect('home');
			}
	    	//$this->load->view('Home');
        }	else{
                	$message = "Username / Password salah";
					echo "<script type='text/javascript'>alert('$message');window.location.href='".site_url('Login')."';</script>";
	  		//$this->load->view('Home');
		}
	}

	// public function loginUser()
	// {
	// 	if($this->session->userdata('username'))
	// 	{
	// 		redirect('Login/readDataUser');
	// 	}else{
	// 		redirect('Login/login');}}

 //    public function login()
	// {
	// 	if($this->session->userdata('username')){
	// 		redirect('Login/admin');
	// 	}else{
	// 		$message = "Username / Password Salah";
	// 		echo "<script type='text/javascript'>alert('$message');window.location.href='".site_url('')."';</script>";
	// 	}
	// }

        
	

	// public function komentar()
	// {
	// 	if($this->session->userdata('username'))
	// 	{
	// 		redirect('Login/readDataUser');
	// 	}else{
	// 		redirect('Login/login');}}
            

	// public function admin()
	// {
	// 	if($this->session->userdata('username'))
	// 	{
 //            redirect('Login/komentar');
	// 	}else{
 //            redirect('Login/login');}}

	
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