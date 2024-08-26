<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseTest extends CI_Controller {
    public function index() {
        $this->load->model('Test_model');
        $result = $this->Test_model->test_connection();
        $test = $this->Test_model->getData();

        $data['content'] = 'databaseTest';
        $this->load->view('template/index',$data);
    }
}
?>
