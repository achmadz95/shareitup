<?php

class Barang_detail extends CI_Controller{

	public function __construct() {
    		parent:: __construct();
    		$this->load->Model('Model_kelolaBarang');
    		$this->load->Model('Model_futsal');
		}


	public function index(){
		$item=$this->input->get('id_barang');
		$data = $this->Model_kelolaBarang->getDetailBarang($item);
		$this->load->view('Barang_detail', array('data' => $data)
		);	
	}

	public function pinjam_barang(){
		$id_user= $this->session->userdata('id_user');

		$id_barang=$this->input->post('id_barang');
		$date=$this->input->post('date');
		$dp=$this->input->post('dp');
		$sisa_saldo= $this->session->userdata('saldo')-$dp;

		$data = array ( // Data untuk laporan transaksi
				'id_peminjam' => $this->session->userdata('id_user'),
            	'id_barangP'=> $id_barang,
            	'tgl_dipinjam' => date('Y-m-d'),
            	'tgl_dikembalikan'  => $date
            );
		$saldo = array( // Data untuk pengurangan saldo user
        		'saldo'=> $sisa_saldo
        	);
                 
		$this->Model_kelolaBarang->pinjamBarang($data);
		$this->Model_futsal->UpdateData('user',$saldo,'id_user ='.$id_user);
		$this->session->set_userdata('saldo', $sisa_saldo); // untuk update session saldo

		echo "<script>alert('Barang berhasil di booking') ; window.location.href = '../'</script>";

	}

}

?>