<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller{

function __construct(){	
		parent::__construct();		
		 if(!$this->session->userdata('id_user'))
			redirect('Login');
		
		$this->load->model('Model_kelolaBarang');
	}
	
	public function index(){
		//$data['results'] = $this->Model_futsal->login_user($username,$pass);
        //$this->load->helper(array('form','url'));
		 $this->load->view('Post');	
		

	}

	public function createBarang(){
		if($this->session->userdata('id_user')){
    		if (isset($_POST['btnSubmit'])){
			$foto = "assets/img/".basename($_FILES['foto_barang']['name']);

			$id_barang = $_POST['id_barang'];
			$nama_barang = $_POST['nama_barang'];
			$jenis =  $_POST['jenis'];
			$foto1 = $_FILES['foto_barang']['name'];
			$deskripsi_barang = $_POST['deskripsi_barang'];
			$id_user = $this->session->userdata('id_user');
			


			$data_insert = array(
				'id_barang' => $id_barang,
				'nama_barang' => $nama_barang,
				'jenis' => $jenis,
				'foto_barang' => $foto,
				'deskripsi_barang' => $deskripsi_barang,
				'id_pemilik' => $id_user

			);
			
			$res = $this->Model_kelolaBarang->postBarang($data_insert);

			if($res == true){
                redirect('Kelola_barang');}
            else{
                redirect('Post');}}}
		else redirect('Home');}

		function uploadBarang($id_barang){
			if($this->session->userdata('id_user')){
				$where = array('id_barang' => $id_barang);
	        	$upd = $this->Model_futsal->updateData('barang', $data_insert, $where);
	        	
	        	if ($upd >= 1) {
	    			redirect('Post/user');}}
			else redirect('Post/useradd');}
			
		function deleteBarang($id_barang){
    		if($this->session->userdata('id_user')){
    			$wheree = array('id_barang' => $id_barang);
				$res = $this->Model_kelolaBarang->delete_item_barang($id_barang);
				
				if($res>=1){
					redirect('Post');
				}
				redirect('Kelola_barang');
			}
			else redirect('Home/index');}

		public function edit($ID){
			$where = array('id_barang' => $ID);
			$data['barang'] = $this->Model_kelolaBarang->edit_data($where,'barang')->result();
			$this->load->view('EditBarang', $data);
		}

} ?>