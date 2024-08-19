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
		
	}
	
    function index(){
        // blah
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
              $username   = $this->input->post('form-username');
			  $password   = $this->input->post('form-password');   
                
               $level = "siswa"; 
					if($level === "siswa"): 
		                if(($username === "daniel")&&($password === "1"))://pelajar  
		                     //echo "login siswa praktikal";
							 $data['content']	= 'mainpage';
							 $this->load->view('template/index',$data);
					   else:									
						    $this->session->set_flashdata('notis', '<p class="alert alert-danger">ID / KATALALUAN tidak tepat, cuba lagi</p>');	
			      			$this->output->set_header('refresh:0; url='.base_url());
					   endif;
					elseif($level === "staff")://staff 
						echo "login pelajar";
				endif;					
		endif;
		}

	
	function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('home/login','refresh');
	}	
}