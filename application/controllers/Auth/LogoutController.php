<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function logout()
    {
        $this->session->unset_userdata('auth_user');
        $this->session->unset_userdata('authenticated');
        $this->session->sess_destroy();
        redirect(base_url('loginpage'));
    }
}
