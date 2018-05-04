<?php

class Notif extends CI_Controller{

public function index(){
		
		$this->load->model('Model_kelolaProfil');
		$data=$this->Model_kelolaProfil->notif();
		 // $now= date('Y-m-d');
		// $myDateTime = DateTime::createFromFormat('Y-m-d', $date);
		// $formatted = $myDateTime->format('Y-m-d');

		$now=date('Y-m-d');

		foreach ($data as $row) {
			
			$date=date_create($row['tgl_dikembalikan']);
			$subbed= date_sub($date, date_interval_create_from_date_string('3 days'));
			$converted= $subbed->format('Y-m-d');

			echo '  '.$converted;
			echo '  '.$now;

			if ($now==$converted) {  
  
  $sender_email = 'pujiji@shareitup.xyz';
  $user_password = 'pujiji';
  
  // $username = $row['nama_user'];

  // Configure email library
  $config['protocol'] = 'http';
  $config['smtp_host'] = 'mx1.hostinger.in';
  $config['smtp_timeout'] = '7';
  $config['smtp_port'] = 587;
  $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        //$config['validation'] = TRUE; // bool whether to validate email or not
  $config['smtp_user'] = $sender_email;
  $config['smtp_pass'] = $user_password;
            
  $this->load->library('email', $config);
  $this->email->set_newline("\r\n");

  // Sender email address
  $this->email->from($sender_email, $username);
  // Receiver email address
  $this->email->to($row['email']);
  // Subject of email
  $this->email->subject('Segera kembalikan barang anda!');
  // Message in email
  $this->email->message('Dear, '.$row['nama_user'].'. barang yang anda pinjam, '.$row['nama_barang'].' akan menyentuh batas peminjaman dalam 3 hari. Segera melakukan pengembalian barang');
        
  $this->email->send();
   }

			else {}

		}

	}


}
?>