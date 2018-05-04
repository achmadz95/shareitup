<?php

class Model_kelolaTransaksi extends CI_Model {

	public function tampilDetail() {

		$data=$this->db->select('*')->from('barang');
		
		return $data->get()->result_array();	

	}

	public function getDataTransaksi($tabel) { // mengambil data transaksi barang di database
    	return $this->db->select('*')->get_where($tabel);
  	}

  	public function delete_item_transaksi($item){ // Delete barang data di database
    	$this->db->where_in('id_peminjam', $item);
    	$this->db->delete('transaksi_barang');
  	}

}
?>