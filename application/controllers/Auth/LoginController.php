<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('StaffModel');
    }

    function index()
    {
        $this->load->view('loginpage');
    }

    function login()
    {
        // $data = $this->setting;
        $this->form_validation->set_error_delimiters('<p class="alert alert-danger">', '</p>');

        $this->form_validation->set_rules('form-username','(ID Pengguna)','required');
        $this->form_validation->set_rules('form-password','(katalaluan)','required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('loginpage');
        }
        else
        {
            $data = [
                'staff_id' => $this->input->post('form_username'),
                'password' => $this->input->post('form_password')
            ];
            
            $staffModel = new StaffModel;
            
            $result = $this->staffModel->loginUser($data);
            if ($result != FALSE)
            {
                $auth_user = [
                    'staff_id' => $result->STAFF_ID,
                    'name' => $result->NAME
                ];
                
                $this->session->set_userdata('authenticated', 1);
                $this->session->set_userdata('auth_user', $auth_user);
                redirect(base_url('dashboard/maindb/pageone'));
            }
            else
            {
                $this->session->set_flashdata('notis', '<p class="alert alert-danger">ID / KATALALUAN tidak tepat, cuba lagi</p>');	
                $this->output->set_header('refresh:0; url='.base_url());
            }
        }
    }
}
