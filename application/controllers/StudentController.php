<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load the model
        $this->load->model('StudentModel');
    }

    public function index()
    {
        // Get search parameters from form submission or query string
        $searchData = array(
            'no_matrik' => $this->input->get('no_matrik'),
            'nama' => $this->input->get('nama'),
            'sesi' => $this->input->get('sesi'),
            'sem' => $this->input->get('sem')
        );

        // Fetch the student records based on search parameters
        $data['students'] = $this->StudentModel->search_students($searchData);

        // Pass available SESI options to the view
        $data['sesi_options'] = array(
            '20222023' => '20222023',
            '20232024' => '20232024',
            '20242025' => '20242025'
        );

        $data['sem_options'] = array(
            '1' => '1',
            '2' => '2'
        );

        $data['content'] = 'StudentRecord';
        $this->load->view('template/index', $data);
    }
}
