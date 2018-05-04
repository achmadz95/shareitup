<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class EditBarang extends CI_Controller{

	function __construct(){	
		parent::__construct();		
		if(!$this->session->userdata('id_user')) { // >>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_ADMIN JIKA TIDAK LOGIN <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('Login');
		}
		
		$this->load->model('Model_kelolaBarang');
	}


	public function index(){
		//$data['results'] = $this->Model_futsal->login_user($username,$pass);
        //$this->load->helper(array('form','url'));
		//$this->load->view('home_admin');
		
		$data=$this->Model_kelolaBarang->getDataBarang('barang','','')->result_array();
        $kirim['data']  = $data;

		$this->load->view('EditBarang', $kirim);
		
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
		$this->load->view('EditBarang', $data);
	}
	
	public function update(){
		$id = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$jenis = $this->input->post('jenis');
		$deskripsi_barang = $this->input->post('deskripsi_barang');
	 	
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
			redirect('Kelola_barang'); }

        else {

        	$this->upload->do_upload('image');

        	$data_updates = array(
           		'nama_barang' => $nama_barang,
				'jenis' => $jenis,
				'deskripsi_barang' => $deskripsi_barang,
				'foto_barang' => $file1
				);

            $this->Model_kelolaBarang->UpdateData('barang',$data_updates,'id_barang ='.$id);
			redirect('Kelola_barang');
		}
		
	}


} ?>