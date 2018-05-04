<?php

class Barang_detail extends CI_Controller{

	public function __construct() {
    		parent:: __construct();
    		$this->load->Model('Model_kelolaBarang');
		}


public function index(){
		$item=$this->input->get('id_barang');
		$data = $this->Model_kelolaBarang->getDetailBarang($item);
		$this->load->view('Barang_detail'
		, array('data' => $data)
		);	
	}

public function pinjam_barang(){

	$id_barang=$this->input->post('id_barang');
	$date=$this->input->post('date');

	$data = array (
				 'id_peminjam' => $this->session->userdata('id_user'),
            	 'id_barangP'=> $id_barang,
            	 'tgl_dipinjam' => date('Y-m-d'),
             	 'tgl_dikembalikan'  => $date);
                 
	$this->Model_kelolaBarang->pinjamBarang($data);

	               echo "<script>alert('Barang berhasil dipinjam') ; window.location.href = '../'</script>";
               // 'foto_profil' => $file1
               // 'foto_ktp' => $file2
        	  
	
}

}

?>