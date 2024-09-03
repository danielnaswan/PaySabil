<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication extends CI_Model 
{
    
    function __construct() 
    {
        
        parent::__construct();
        $this->load->library('session');
        if ($this->session->has_userdata('authenticated'))
        {
            
            if ($this->session->userdata('authenticated') == '1')
            {
                echo 'i am user';
            }
        }
        else 
        {
            $this->session->set_flashdata('notis', 'Login First');
            redirect(base_url('home/login'));
        }
    } 
    
}



?>