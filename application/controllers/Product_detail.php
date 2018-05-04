<?php

class Product_detail extends CI_Controller{

public function index(){
		//$id=$this->session->userdata('id_user');
		//$data = $this->Model_futsal->tampil_profil($id);
		$this->load->view('Product_detail'
		//, array('data' => $data)
		);	
	}

public function pinjam_barang(){

	
}

}

?>