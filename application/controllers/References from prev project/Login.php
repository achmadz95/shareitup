<?php 
 
class Login extends CI_Controller{

	function index(){
		$this->load->view('Login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' =>$username,
			'password' =>$password
			);
		$cek = $this->Model_futsal->cek_login($username,$password);
		
		if($cek->num_rows() == 1){
 
			foreach ($cek -> result() as $data) {
				$data_session['id_user'] = $data->id_user;
				$data_session['username'] = $data->username;
				$this->session->set_userdata($data_session);
			}
			
			redirect('Login/authenticate');  }

		else {
                  $this->session->set_flashdata('pesan', 'Username dan password salah!');
			redirect('Login'); }  }


 function authenticate(){
		if(!$this->session->userdata('username') ){
			redirect('Login');
		  }

        else {redirect('Home');}  }
		  }
?>