<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CafeController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('CafeModel');
    }

    function index()
    {
        // Default action, you can redirect to cafeList or some other view here
    }

    function cafeList()
    {
        // Use the loaded model to get the cafe list
        $data['cafe'] = $this->CafeModel->getCafeList();

        // Load the LaporanKafe view and pass the data
        $data['content'] = 'LaporanKafe';
        $this->load->view('template/index', $data);
    }
}
