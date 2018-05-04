<?php

class Profil_test extends TestCase {
	
		public function setUp()
        {
            $this->resetInstance();
            $this->CI->load->model('Model_futsal');
            // $this->objek = $this->CI->Model_futsal;
            $this->form_validation = new CI_Form_validation();
             
        }


	public function test_index(){
        $_SESSION['id_user'] = "3";
		$_SESSION['username'] = "bagus";
		$output = $this->request('GET', 'Profil/index');
		$this->assertContains('<title>FUTSAL.in</title>', $output);
        }
		
	public function test_index_notlogged(){
            $output = $this->request('GET', 'Profil/index');
            $this->assertFalse( isset($_SESSION['id_user'], $output) );
			$this->assertRedirect('login');
        }
		
	public function test_edit_profil(){
			$_SESSION['id_user'] = "3";
            $_SESSION['username'] = "bagus";
			
	

            $expected = array( 

				'deskripsi'=>'Cogito ergo sum' , 
				'quote' => 'aye',
				'alamat_user' => 'Kureksari' , 
				'ttl_user' =>'17 agustus 194' , 
				'phone_user' => '08672916399',
				
				);


		$this->request(
			'POST',
			'Profil/edit_profil', $expected
		);



		$updated = $this->CI->Model_futsal->tampil_profil(3);
		$actual = $expected['quote'];
		$actual2 = $expected['deskripsi'];
		$actual3 = $expected['ttl_user'];
		$actual4 = $expected['phone_user'];
		$actual6 = $expected['alamat_user'];

		foreach ($updated as $x) {
			$this->assertEquals($actual,$x['quote']);
			$this->assertEquals($actual2,$x['deskripsi']);
			$this->assertEquals($actual3,$x['ttl_user']);
			$this->assertEquals($actual4,$x['phone_user']);
			$this->assertEquals($actual6,$x['alamat_user']);
		}
			
	}


	
		
}