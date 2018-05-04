<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin_Transaksi extends CI_Controller{

	function __construct(){	
		parent::__construct();		
		if(!$this->session->userdata('id_user')) { // >>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_ADMIN JIKA TIDAK LOGIN <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('Login');
		}
		if($this->session->userdata('isAdmin')==FALSE) { // >>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_USER JIKA MEMBUKA HALAMAN HOME_ADMIN <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('Home');
		}
		
		$this->load->model('Model_kelolaTransaksi');
	}


	public function index(){
		//$data['results'] = $this->Model_futsal->login_user($username,$pass);
        //$this->load->helper(array('form','url'));
		//$this->load->view('home_admin');
		$data=$this->Model_kelolaTransaksi->getDataTransaksi('transaksi_barang','','')->result_array();
        $kirim['data']  = $data;

		$this->load->view('Admin_Transaksi', $kirim);
		// $now = new DateTime();
		// $now->setTimezone(new DateTimezone('Asia/Jakarta'));
	}

	public function deleteTransaksi($ID){ //delete 1 komentar
    	$res = $this->Model_kelolaTransaksi->delete_item_Transaksi($ID);
    	redirect('Admin_transaksi');
	}



} ?>