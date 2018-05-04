<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class View_Edit extends CI_Controller{

	function __construct(){	
		parent::__construct();		
		if(!$this->session->userdata('id_user')) { // >>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_ADMIN JIKA TIDAK LOGIN <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('Login');
		}
		if($this->session->userdata('isAdmin')==FALSE) { // >>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_USER JIKA MEMBUKA HALAMAN HOME_ADMIN <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('Home');
		}
		
		$this->load->model('Model_kelolaBarang');
	}


	public function index(){
		//$data['results'] = $this->Model_futsal->login_user($username,$pass);
        //$this->load->helper(array('form','url'));
		//$this->load->view('home_admin');
		
		$data=$this->Model_kelolaBarang->getDataBarang('barang','','')->result_array();
        $kirim['data']  = $data;

		$this->load->view('View_Edit', $kirim);
		
		// $now = new DateTime();
		// $now->setTimezone(new DateTimezone('Asia/Jakarta'));
	}

	public function deleteBarang($ID){ //delete 1 komentar
    	$res = $this->Model_kelolaBarang->delete_item_barang($ID);
    	redirect('Admin_barang');
	}

	
	public function edit($ID){
		$where = array('id_barang' => $ID);
		$data['barang'] = $this->Model_kelolaBarang->edit_data($where,'barang')->result();
		$this->load->view('View_edit', $data);
	}
	
	function update(){
		
		
		$id = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$jenis = $this->input->post('jenis');
		$deskripsi_barang = $this->input->post('deskripsi_barang');
	 
		$data = array(
			'nama_barang' => $nama_barang,
			'jenis' => $jenis,
			'deskripsi_barang' => $deskripsi_barang,
			'foto_barang' => $foto_barang
		);
		
		if ($this->upload('foto_barang')) {
				$data['foto_barang'] = base_url().'assets/img/'.$this->upload('file');
			}
		else{
				$data['foto_barang'] = '';
		}
			
		$where = array(
			'id_barang' => $id
		);
	 
		$this->Model_kelolaBarang->update_data($where,$data,'barang');
		redirect('Admin_Barang');
	}
	
	public function upload($foto_barang){
		$config = array(
				'upload_path'=> './assets/img/',
				'allowed_types'=>'gif|jpg|png|jpeg',
				'max_size'=>2048,
				'max_width'=>500,
				'max_height'=>500,
				'overwrite'=>true,
				'file_name'=>'GALERI_'.rand(0,10000000));
		$this->upload->initialize($config);
		$do = $this->upload->do_upload($foto_barang);
		if (!$do) {
			return false;
		}else{
			return $this->upload->data('foto_barang');
		}
	}

} ?>