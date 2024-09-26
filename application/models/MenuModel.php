<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();  // Load the database
    }

    // Save menu data to the PAYSABIL_MENU table
    public function addMenu($data) {
        $this->db->insert('PAYSABIL_MENU', $data);
    }
}