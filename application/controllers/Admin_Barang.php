<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin_Barang extends CI_Controller{

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
		$data=$this->Model_kelolaBarang->getDataBarang('barang','','')->result_array();
        $kirim['data']  = $data;
		$this->load->view('Admin_Barang', $kirim);
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
	
	public function update(){
		$id = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$jenis = $this->input->post('jenis');
		$deskripsi_barang = $this->input->post('deskripsi_barang');
		$dipinjam = $this->input->post('dipinjam');
		$dikembalikan = $this->input->post('dikembalikan');

	 	$config['upload_path']         = './assets/img';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100000;
		$config['max_width']            = 1920;
		$config['max_height']           = 1080;

		$this->upload->initialize($config);
 
   		$file1 = trim(addslashes('assets/img/'.$_FILES['image']['name']));     
    	$file1 = preg_replace('/\s+/', '_', $file1);


    	if(! $this->upload->do_upload('image')){

        	$data_update = array(
        		'nama_barang' => $nama_barang,
				'jenis' => $jenis,
				'deskripsi_barang' => $deskripsi_barang,
				'dipinjam' => $dipinjam,
				'dikembalikan' => $dikembalikan,
				);

           	$this->Model_kelolaBarang->UpdateData('barang',$data_update,'id_barang ='.$id);
			redirect('Admin_Barang'); }

        else {

        	$this->upload->do_upload('image');

        	$data_updates = array(
           		'nama_barang' => $nama_barang,
				'jenis' => $jenis,
				'deskripsi_barang' => $deskripsi_barang,
				'dipinjam' => $dipinjam,
				'dikembalikan' => $dikembalikan,
				'foto_barang' => $file1
				);

            $this->Model_kelolaBarang->UpdateData('barang',$data_updates,'id_barang ='.$id);
			redirect('Admin_Barang');
		}
		

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

	// public function cari(){
	// 	$where = array('id_pemilik' => $this->input->post('id_pemilik'));
	// 	$hasil = $this->Model_kelolaBarang->pencarian($where, 'barang');
	// 	$data = array('data'=>$hasil);
	// 	$this->load->view('Admin_Barang', $data);	
	// }

	public function urutAdmin($parameter) {
		$where1 = array('id_barang' => $parameter);
		$where = array('id_pemilik' => $this->session->userdata('keyword')['keyword'], 'jenis' => $this->session->userdata('keyword')['keyword']);
		$hasil = $this->Model_kelolaBarang->urutan_cari($where,$where1, 'barang');
		$data = array('data'=>$hasil);

		$this->load->view('Admin_Barang', $data);
	}

	public function cari(){
		$where = array('id_pemilik' => $this->input->post('pencari'), 'nama_user' => $this->input->post('pencari'));
		$hasil = $this->Model_kelolaBarang->pencarian($where, 'barang');
		$data = array('data'=>$hasil);
	
		$this->load->view('admin_barang', $data);

	}

} ?>