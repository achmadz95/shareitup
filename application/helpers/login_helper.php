<?php 
	function check_login( $session ) {
    	$CI =& get_instance();
    	$CI->load->helper('url');
     	
     	if(!$session->userdata('login')){
        	redirect(base_url());
     	}

	}
?>