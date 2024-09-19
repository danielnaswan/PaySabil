<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LogoutController extends CI_Controller
{   
    function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
    }

    function logout()
	{
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');

		$this->session->unset_userdata('auth_user');
		$this->session->unset_userdata('authenticated');
		$this->session->sess_destroy();
        
        $cookie = array(
            'name'   => $this->config->item('sess_cookie_name'),
            'value'  => '',
            'expire' => '-3600',
            'secure' => FALSE
        );
        set_cookie($cookie);
        log_message('debug', 'Session Data After Destroy: ' . print_r($this->session->userdata('auth_user'), TRUE));
		redirect('home/login','refresh');
        

	}
}


?>