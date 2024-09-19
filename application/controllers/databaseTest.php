<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseTest extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Test_Model');
    }

    function transList()
    {   
        $data['transaction'] = $this->Test_Model->getTransaction();

        $data['content'] = 'LaporanTransaksi';
        $this->load->view('template/index', $data);
    }
}
?>
