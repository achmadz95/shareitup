<?php

class Home_test extends TestCase {
    public function test_index()
	{
		$_SESSION['username'] = 'umar'; 
		$output = $this->request('POST', 'Home');
		$this->assertContains('<title>FUTSAL.in</title>', $output); 
	}
	
	public function test_index_bukansessionnya() //buat redirect ke login
	{
		  
		$output = $this->request('POST', 'Home');
		$this->assertFalse(isset($_SESSION['username'], $output));
		$this->assertRedirect('login', $output); 
		}

}
?>