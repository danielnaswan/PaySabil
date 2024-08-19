<?php

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		//global
		$this->setting = array(
            'site_name' 		=> 'smpuUTHM',
            'site_slogan' 		=> 'Sistem Maklumat Penerbitan Universiti',
            'currency' 			=> 'RM',
            'per_page' 			=>  25,
            'contact_email' 	=> 'hafizahr@uthm.edu.my',
            'theme' 			=> 'AdminLTE',
  	        );
		
	  //if($this->session->userdata('is_logged_in')==FALSE) redirect('auth/login');	
	}
	
	
	
	
	
	
}

