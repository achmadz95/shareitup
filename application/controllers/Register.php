<?php

	class Register extends CI_Controller{

		public function __construct() {
    		parent:: __construct();
    		$this->load->Model('Model_kelolaProfil');
			//$this->load->library('form_validation');
		}

		public function index() {
			$this->load->view('Register');

		}

		public function tambahuser() { // Input data register ke database		
		
		//$this->form_validation->set_rules('email', 'Email', 'required');
		
		//if ($this->form_validation->run()) {
        $username = $this->input->post('username');
      	$password  = $this->input->post('password');
      	$sha1 = sha1($password);
      	$nama = $this->input->post('nama');
      	$kodepos = $this->input->post('kodepos');
      	$alamat = $this->input->post('alamat');
      	$kecamatan = $this->input->post('kecamatan');
      	$no_telp = $this->input->post('no_telp');
        $email = $this->input->post('email');


        $config['upload_path']         = './assets/img';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100000;
        $config['max_width']            = 1920;
        $config['max_height']           = 1080;
        
        $this->upload->initialize($config);

        $file1 = trim(addslashes('assets/img/'.$_FILES['image']['name']));     /*FOTO PROFILE*/
        $file1 = preg_replace('/\s+/', '_', $file1);
        $file2 = trim(addslashes('assets/img/'.$_FILES['image2']['name']));    /*FOTO KTP*/ 
        $file2 = preg_replace('/\s+/', '_', $file2);

        if ($this->upload->do_upload('image2') && $this->upload->do_upload('image')) {  /*JIKA UPLOAD FOTO_PROFIL DAN FOTO_KTP*/
          $data2 = array (
               'deskripsi'=> 'User',
               'username' => $username,
               'password'  => $sha1,
               'nama_user'=> $nama,
               'kode_pos' => $kodepos,
               'alamat'  => $alamat,
               'kecamatan'=> $kecamatan,
               'no_telp'=> $no_telp,
               'email'=> $email,
               'foto_ktp' => $file2,
               'foto_profil' => $file1
               );
          $this->Model_kelolaProfil->tambahProfil('user',$data2);
          echo "<script>alert('Anda berhasil mendaftar') ; window.location.href = '../'</script>";
        }
        
        else {                                                                        /*JIKA UPLOAD FOTO_KTP*/
          $data1 = array (
               'deskripsi'=> 'User',
               'username' => $username,
               'password'  => $sha1,
               'nama_user'=> $nama,
               'kode_pos' => $kodepos,
               'alamat'  => $alamat,
               'kecamatan'=> $kecamatan,
               'email'=> $email,
               'no_telp'=> $no_telp,
               'foto_ktp' => $file2,
               'foto_profil' => $file1
               );
          $this->Model_kelolaProfil->tambahProfil('user',$data1);
          echo "<script>alert('Anda berhasil mendaftar') ; window.location.href = '../'</script>";
        }
		//}

	}
}
?>