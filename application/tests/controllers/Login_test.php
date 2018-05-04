<?php

class Login_test extends TestCase {
	
	
    public function test_index()
	{
		$output = $this->request('GET', 'Login');
		$this->assertContains('<title>Futsal.in : Log In</title>', $output); 
	}

        public function test_aksi_login() //user benar password benar
    {    
        $output = $this->request('POST', 'Login/aksi_login', 
					['username' => 'umar',
					 'password' => 'siapmaju'
					 ]);
        $this->assertEquals('umar', $_SESSION['username'], $output);
        $this->assertRedirect('Login/authenticate');
    }
    
    public function test_aksi_login_bukanuser() //user salah password salah
    {
        $output = $this->request('POST', 'Login/aksi_login',
                [
                    'username' => 'salah ini',
                    'password' => 'passnya salah',
                ]);
        
        $this->assertFalse(isset($_SESSION['username'], $output));
        $this->assertRedirect('Login');
    }
	
	public function test_aksi_login_userbenar() //user benar password salah
    {
        $output = $this->request('POST', 'Login/aksi_login',
                [
                    'username' => 'umar',
                    'password' => 'passnya salah',
                ]);
        
        $this->assertFalse(isset($_SESSION['username'], $output));
        $this->assertRedirect('Login');
    }
	
	public function test_aksi_login_usersalah() //user salah password benar
    {
        $output = $this->request('POST', 'Login/aksi_login',
                [
                    'username' => 'usernyasalah',
                    'password' => 'siapmaju',
                ]);
        
        $this->assertFalse(isset($_SESSION['username'], $output));
        $this->assertRedirect('Login');
    }

    public function test_aksi_login_kosong(){ //user passwd kosong

        $this->request('POST', 'Login/aksi_login',
                [
                    'username' => '',
                    'password' => '',
                ]);


        $this->assertFalse(isset($_SESSION['username']));
        $this->assertRedirect('Login');
    }
	
	public function test_aksi_login_userisibenar(){ //user diii benar passwd kosong

        $this->request('POST', 'Login/aksi_login',
                [
                    'username' => 'umar',
                    'password' => '',
                ]);


        $this->assertFalse(isset($_SESSION['username']));
        $this->assertRedirect('Login');
    }
	
	public function test_aksi_login_userisisalah(){ //user diisi salah password kosong

        $this->request('POST', 'Login/aksi_login',
                [
                    'username' => 'umar1234',
                    'password' => '',
                ]);


        $this->assertFalse(isset($_SESSION['username']));
        $this->assertRedirect('Login');
    }
	
	public function test_aksi_login_passwdisibenar(){ //user kosong passwd benar

        $this->request('POST', 'Login/aksi_login',
                [
                    'username' => '',
                    'password' => 'siapmaju',
                ]);


        $this->assertFalse(isset($_SESSION['username']));
        $this->assertRedirect('Login');
    }
	
	public function test_aksi_login_passwdisisalah(){ //user kosong password alah

        $this->request('POST', 'Login/aksi_login',
                [
                    'username' => '',
                    'password' => 'siapmajujujujujutu',
                ]);


        $this->assertFalse(isset($_SESSION['username']));
        $this->assertRedirect('Login');
    }
	
	public function test_authenticate_ada_session()
		{
       $_SESSION['id_user'] = "1";
       $_SESSION['username'] = "umar";
        $this->request('GET','Login/aksi_login');
        $this->request('GET', 'Login/authenticate');
        
        $this->assertTrue( isset($_SESSION['username']) );
        $this->assertRedirect('Home'); 
		}

    public function test_authenticate_no_session()
        {
        $this->request('GET','Login/aksi_login');    
        $this->request('GET', 'Login/authenticate');
        
        $this->assertFalse( isset($_SESSION['username']) );
        $this->assertRedirect('Login'); 
        }
  
}