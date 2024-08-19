<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseTest extends CI_Controller {
    public function index() {
        $this->load->model('Test_model');
        $result = $this->Test_model->test_connection();

        if ($result == 1) {
            echo "Connection to MariaDB BERJAYA!";
			 
        } else {
            echo "Connection failed!";
        }
    }
}
?>
