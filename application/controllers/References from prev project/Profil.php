<?php

class Profil extends CI_Controller{

function __construct(){
		parent::__construct();		
		if(!$this->session->userdata('id_user'))
			redirect('login');
		
		$this->load->model('Model_futsal');
		
	}


public function index(){
		$id=$this->session->userdata('id_user');
		$data = $this->Model_futsal->tampil_profil($id);
		$this->load->view('Profil', array('data' => $data));	
	}

public function edit_profil(){

		$quote = $_POST['quote'];
		$alamat = $_POST['alamat_user'];
		$ttl =  $_POST['ttl_user'];
        $phone =  $_POST['phone_user'];
        $deskripsi = $_POST['deskripsi'];
        
	 	$config['upload_path']         = './assets/img';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100000;
		$config['max_width']            = 1920;
		$config['max_height']           = 1080;
        
        $this->upload->initialize($config);
 
   		$file1 = trim(addslashes('assets/img/'.$_FILES['image']['name']));     
    	$file1 = preg_replace('/\s+/', '_', $file1);

        $id=$this->session->userdata('id_user');
		
		// $where = array('id_user' => $id);
		
		if(! $this->upload->do_upload('image')){

        $data_update = array(
        	'quote' => $quote, 
        	'alamat_user' => $alamat , 
        	'ttl_user' =>$ttl, 
        	'phone_user' => $phone, 
        	'deskripsi'=>$deskripsi	);
        
           $this->Model_futsal->UpdateData('user',$data_update,'id_user ='.$id);

           redirect('Profil'); } else {

            $this->upload->do_upload('image');

           $data_updates = array('quote' => $quote, 
           	'alamat_user' => $alamat , 
           	'ttl_user' =>$ttl, 
           	'phone_user' => $phone, 
           	'deskripsi'=>$deskripsi, 
           	'image'=>$file1);
            
            $this->Model_futsal->UpdateData('user',$data_updates,'id_user ='.$id);
			redirect('Profil'); }}

		}

?>
