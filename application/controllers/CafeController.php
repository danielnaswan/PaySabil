<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CafeController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('CafeModel');
        $this->load->model('TransModel');
        $this->load->model('MenuModel');
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
        $selected_date = $this->input->get('datePicker') ? $this->input->get('datePicker') : date('Y-m-d');

        $data['selected_date'] = $selected_date; // Pass the selected date to the view
        $data['cafe'] = $cafe;
        $data['transaction'] = $this->TransModel->getTransaction($selected_date);

        $data['content'] = 'LaporanTransaksi';
        $this->load->view('template/index', $data);


    }

    //for TambahKafe
    function addCafe()
    {
        $this->form_validation->set_rules(	'cafeName','(Nama Kafe)','required|callback_check_valid_name');
        $this->form_validation->set_rules(	'location','(Lokasi)','required');

        if ($this->form_validation->run() == FALSE)
        {
            $data['content'] = 'TambahKafe';
            $this->load->view('template/index', $data);
        }
        else
        {
            // Get form data
            $cafeName = $this->input->post('cafeName');
            $location = $this->input->post('location');
            $otherLocation = $this->input->post('otherLocation');
            $menuItems = $this->input->post('menu');
            $menuPrices = $this->input->post('price');

            // Check if 'Other' location was selected and handle it
            if ($location == 'other') {
                $location = $otherLocation;
            }   

            // Data to insert into PAYSABIL_CAFE
            $cafeData = [
                'NO_KAFE' => $this->CafeModel->generateNoKafe(), // Generates unique NO_KAFE
                'NAMA_KAFE' => strtoupper($cafeName),
                'LOKASI' => strtoupper($location)
            ];

            // Insert cafe data into PAYSABIL_CAFE
            $this->CafeModel->insertCafe($cafeData);

            // Insert menu items into PAYSABIL_MENU
            foreach ($menuItems as $index => $menuItem) {
                $menuData = [
                    'NAMA_MENU' => strtoupper($menuItem),
                    'HARGA' => $menuPrices[$index],
                    'NO_KAFE' => $cafeData['NO_KAFE']
                ];
                $this->MenuModel->addMenu($menuData);
            }
            
            if ($this->CafeModel->insertCafe($cafeData)) {
                log_message('debug', 'Cafe inserted successfully');
            } else {
                log_message('error', 'Error inserting cafe');
            }
            

            // Redirect to success or another page
            redirect(site_url('CafeController/addCafe'));

        }
    }

    //for 'sunting' button in laporanKafe
    function editCafe($noCafe)
    {
        $cafeName = $this->input->post('cafeName');
        $location = $this->input->post('location');
        $otherLocation = $this->input->post('otherLocation');
        $menuItems = $this->input->post('menu');
        $menuPrices = $this->input->post('price');

        if ($location == 'other') {
            $location = $otherLocation;
        }

        $cafeData = [
            'NO_KAFE' => $noCafe,
            'NAMA_KAFE' => strtoupper($cafeName),
            'LOKASI' => strtoupper($location)
        ];

        $this->CafeModel->updateCafe($cafeData);

        foreach ($menuItems as $index => $menuItem) {
            $menuData = [
                'NAMA_MENU' => strtoupper($menuItem),
                'HARGA' => $menuPrices[$index],
                'NO_KAFE' => $cafeData['NO_KAFE']
            ];
            $this->MenuModel->addMenu($menuData);
        }

        redirect(site_url('CafeController/cafeList'));
    }

    function check_valid_name($str)
    {
        if (preg_match("/[']/", $str)) {
            $this->form_validation->set_message('check_valid_name', 'The {field} field cannot contain a single quote.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
