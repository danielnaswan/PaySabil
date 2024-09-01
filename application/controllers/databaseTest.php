<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseTest extends CI_Controller {
    public function index() {
        $this->load->model('Test_model');
        $result = $this->Test_model->test_connection();
        $test = $this->Test_model->getData();
        
        // if ($result == 1) {
        //     echo "Connection to MariaDB BERJAYA!\n";
        //     echo "<br></br>";
		// 	print_r($test);
        // } else {
        //     echo "Connection failed!";
        // }

        $data['content'] = 'databaseTest';
        $this->load->view('template/index',$data);
    }
}
?>
