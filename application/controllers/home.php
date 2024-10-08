<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		//if($this->setting['online'] != 1) redirect('offline');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('StaffModel');
		
	}
	
    function index(){
        $this->load->view('loginpage');
    }
	
    
	
	function login()
	{
		$data = $this->setting;		
		$this->form_validation->set_error_delimiters('<p class="alert alert-danger">', '</p>');
                
		$this->form_validation->set_rules(	'form-username','(ID Pengguna)','required');
		$this->form_validation->set_rules(	'form-password','(Katalaluan)','required');		
		
		if ($this->form_validation->run() == FALSE):
	
			$this->load->view('loginpage');
		    
		else:
			$data = [
				"staff_id" => $this->input->post('form_username'),
				"password" => $this->input->post('form-password')
			];
			$staff = new StaffModel;
			$result = $staff->loginUser($data);
			if ($result != FALSE):
				$auth_user = [
					'staff_id' => $result->STAFF_ID,
					'name' => $result->NAME,
					'password' => $result->PASSWORD
				];

				$this->session->set_userdata('authenticated', 1);
				$this->session->set_userdata('auth_user', $auth_user);
				redirect(base_url('mainpage'));
			else:
				$this->session->set_flashdata('notis', '<p class="alert alert-danger">ID / KATALALUAN tidak tepat, cuba lagi</p>');	
			 	$this->output->set_header('refresh:0; url='.base_url());
			endif;				
		endif;
		}

	
// 	function logout()
// 	{
// 		$this->session->unset_userdata('auth_user');
// 		$this->session->unset_userdata('authenticated');
// 		$this->session->sess_destroy();
// 		redirect('home/login','refresh');
// 	}	
}