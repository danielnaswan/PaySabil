<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CafeController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('CafeModel');
        $this->load->model('TransModel');
    }

    function index()
    {
        // Default action, you can redirect to cafeList or some other view here
    }

    function cafeList()
    {
        $data['cafe'] = $this->CafeModel->getCafeList();

        $data['content'] = 'LaporanKafe';
        $this->load->view('template/index', $data);
    }

    function transList($cafe)
    {   
        // $data['transaction'] = $this->TransModel->getTransaction(date('Y-m-d'));
        $selected_date = $this->input->post('datePicker') ? $this->input->post('datePicker') : date('Y-m-d');

        $data['selected_date'] = $selected_date; // Pass the selected date to the view
        $data['cafe'] = $cafe;
        $data['transaction'] = $this->TransModel->getTransaction($selected_date);

        $data['content'] = 'LaporanTransaksi';
        $this->load->view('template/index', $data);


    }
}
