<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home extends CI_Controller{

	function __construct(){	
		parent::__construct();		
		if(!$this->session->userdata('id_user')) { // >>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_USER JIKA TIDAK LOGIN <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('Login');
		}
		if($this->session->userdata('isAdmin')==TRUE) { // >>>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_ADMIN JIKA MEMBUKA HALAMAN HOME_USER <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('Home_admin');
		}
		
		$this->load->model('Model_kelolaBarang');
	}



	public function index(){
		//$data['results'] = $this->Model_futsal->login_user($username,$pass);
        //$this->load->helper(array('form','url'));
        $data = $this->Model_kelolaBarang->tampilDepan();
		$this->load->view('Home', array('data' => $data));	
		// if($this->session->userdata('isAdmin')==FALSE)
		// {
		// 	redirect('Home');
		// }else{
		// 	redirect('login');}
	}
	
	public function cari(){
		$where = array('nama_barang' => $this->input->post('pencari'), 'jenis' => $this->input->post('pencari'));
		$hasil = $this->Model_kelolaBarang->pencarian($where, 'barang');
		$data = array('data'=>$hasil);
		$data1 = array('keyword'=>$this->input->post('pencari'));
		$this->session->set_userdata('keyword', $data1);
	
		$this->load->view('Pencarian', $data);	
	}
	
	public function urut($parameter){

			$where1 = array('kecamatan' => $parameter);
			$where = array('nama_barang' => $this->session->userdata('keyword')['keyword'], 'jenis' => $this->session->userdata('keyword')['keyword']);
			$hasil = $this->Model_kelolaBarang->urutan_cari($where,$where1, 'user');
			$data = array('data'=>$hasil);

		$this->load->view('Pencarian', $data);	
	}
	
	public function test()
	{
		
		$filter = $this->input->post('filter');
        $field  = $this->input->post('field');
        $search = $this->input->post('search');

        if (isset($filter) && !empty($search)) {
            $this->load->model('model_kelolaBarang');
            $data['barang'] = $this->model_kelolaBarang->test($field, $search);
        } else {
            $this->load->model('model_kelolaBarang');
            $data['barang'] = $this->model_kelolaBarang->test();
        }

        $this->load->view('pencarian');
	}
	
} ?>