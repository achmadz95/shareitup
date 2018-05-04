<?php

class Model_futsal extends CI_Model {

	function login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query =  $this->db->get('user');
        return $query->num_rows();
    }
    
//    untuk mengambil data hasil login
    public function login_user($username,$pass) {
      $this->db->select('*');
  		$this->db->from('user');
  		$this->db->where('username',$username);
  		$this->db->where('password',$pass);
 
		if($query=$this->db->get()) {
			return $query->row_array();
		}
		else{
    		return false;
  		}
    }

    public function tampil_profil($id){
		  //$this->db->where('id_user',$id);
		  //$data = $this->db->query('select * from user where username='.$id);
		  //return $data->result_array();
    }

   	public function UpdateData($tableName,$data,$where){
		  $res = $this->db->update($tableName,$data,$where);
		  return $res;
    }

    public function getDataAdmin($tabel) { // Mengambil data di database
    	return $this->db->select('*')->get_where($tabel);
  	}

  	public function delete_item_user($item){ // Delete data di database
    	$this->db->where_in('id_user', $item);
    	$this->db->delete('user');
  	}

  	public function input_data($data,$table){
      $this->db->insert($table,$data);
    }
}
?>
