<?php

class Kelola_barang extends CI_Controller{

function __construct(){	
		parent::__construct();		
		if(!$this->session->userdata('id_user')) { // >>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_USER JIKA TIDAK LOGIN <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('Login');
		}
		
		$this->load->model('Model_kelolaBarang');
	}

public function index(){

		$id=$this->session->userdata('id_user');
		$data= $this->Model_kelolaBarang->getBarangUser($id);
		$this->load->view('Kelola_barang' , array('data'=>$data));
		// $this->load->view('Halamanbarang' );
			
	}

public function borrowed(){

	$id=$this->session->userdata('id_user');
	$data= $this->Model_kelolaBarang->getBarangPinjam($id);
	$this->load->view('Terpinjam', array('data'=>$data));
}

public function kembalikan_barang(){

		$id_barang=$this->input->post('id_barang');
		$this->Model_kelolaBarang->kembalikanBarang($id_barang);

	               echo "<script>alert('Barang berhasil dikembalikan') </script>";
			
			redirect('Kelola_barang/borrowed');
               
	

			
	}

	public function edit_post(){
		
			
	}

	public function hapus_barang(){
		
			
	}

	public function post_barang(){

		
	}

} ?>