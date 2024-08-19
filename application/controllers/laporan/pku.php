<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pku extends MY_Controller {
	
	
	public function __construct()
	{
		parent::__construct();
		
	  //if($this->session->userdata('group_id')!=1) redirect('profails/profail');
	}
	
		
	function laporanA()
	{
		//if($this->session->userdata('logged_in')==FALSE) redirect('profails/profail'); // nanti onkan bahagian ni
		
		$data['content'] = 'laporan/laporanpku';
		$this->load->view('template/index',$data);
	}
	
		
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */