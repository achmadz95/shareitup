<?php

class Model_kelolaBarang extends CI_Model {

	public function tampilDepan() {

		$data = $this->db->query('SELECT * FROM (
  SELECT * FROM barang WHERE dipinjam=0 ORDER BY id_barang DESC LIMIT 4
) as r ORDER BY id_barang');
		
		return $data->result_array();	

	}

	public function getDataBarang($tabel) { // mengambil data barang di database
    	return $this->db->select('*')->get_where($tabel);
  	}

  	public function delete_item_barang($item){ // Delete barang data di database
    	$this->db->query('SET FOREIGN_KEY_CHECKS=0');

    	$this->db->query(' DELETE FROM barang WHERE id_barang='.$item);
    	// $this->db->where_in('id_barang', $item);
    	// $this->db->delete('barang');
  	}

  	public function getBarangUser($id_user){

  		// $id_user=$this->session->userdata('id_user');

  		$data=$this->db->query('select * from barang 
  			left join transaksi_barang on barang.id_barang=transaksi_barang.id_barangP
  			left join user on transaksi_barang.id_peminjam=user.id_user where id_pemilik='.$id_user);
  		return $data->result_array();
  		// $this->db->select('*');
   	// 	$this->db->from('barang');
    // 	$this->db->join('user', 'user.id_user = barang.id_pemilik');
    // 	$this->db->where('id_user ='.$id_user);

    // 	$data = $this->db->get();
    // 	return $data->result_array();

  	}

  	public function getBarangPinjam($id_user){

  		// $id_user=$this->session->userdata('id_user');

  		$data=$this->db->query('select * from barang 
  			join transaksi_barang on barang.id_barang=transaksi_barang.id_barangP
  			join user on barang.id_pemilik=user.id_user 
  			where id_peminjam='.$id_user );

  		return $data->result_array();

  		//coming soon :" sabar
  	}


  	public function getDetailBarang($item){
  		// $this->db->where_in('id_barang', $item);
  		$data=$this->db->query('select * from barang 
  			join user on barang.id_pemilik=user.id_user
  			where id_barang='.$item);

  		return $data->result_array();
  	}

  	public function postBarang($data){
  		$res = $this->db->insert('barang',$data);
		return $res;

  	}
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

  	public function UpdateData($tableName,$data,$where){
      $res = $this->db->update($tableName,$data,$where);
      return $res;
    }
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	function pencarian($where, $table ){
		$query = $this->db->select('*')
			->from($table)
			->join('user','id_pemilik = id_user')
			->or_like($where)
			->get();
		return ($query->num_rows() <= 0)? false : $query->result_array();
	}
	
	function urutan($where, $table ){
		$query = $this->db->select('*')
			->from($table)
			->join('user','id_pemilik = id_user')
			->where($where)
			->get();
		return ($query->num_rows() <= 0)? false : $query->result_array();
	}
	
	function urutan_cari($where,$where1, $table ){
		$query = $this->db->select('*')
			->from($table)
			->join('barang','id_pemilik = id_user')
			->or_like($where)
			->where($where1)
			->get();
		return ($query->num_rows() <= 0)? false : $query->result_array();
	}

	function pinjamBarang($item){

		$this->db->insert('transaksi_barang', $item );

		$this->db->query('UPDATE barang SET dipinjam = 1 WHERE barang.id_barang = '.$item['id_barangP']);
		// $this->db->update('barang', 'dipinjam=1', 'barang.id_barang',$item['id_barang']);

		// $query = $this->db->select('*')
  //                 ->from('barang')
  //                 ->join('transaksi_barang', 'id_barang = '.$item)
  //                 ->get();

		// return $query;

	}

	function kembalikanBarang($item){

		// $this->db->insert('transaksi_barang', $item );
		$this->db->query('UPDATE barang SET dipinjam = 0 WHERE barang.id_barang = '.$item);
		$this->db->query('UPDATE barang SET dikembalikan = 1 WHERE barang.id_barang = '.$item);

	}
	
	function test($field , $search){
			$query = $this->db->like($field, $search)->order_By('kelurahan')->get('barang');
			return $query->result();
		}



}
?>