<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PayController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TransModel');
    }

    public function pay()
    {
        // Get `noCafe` and `matricno` from the query parameters in the URL
        $noCafe = $this->input->get('noCafe');
        $matricno = $this->input->get('matricno');

        // Check if both parameters are provided
        if (!$noCafe || !$matricno) {
            show_error('Missing required parameters: noCafe or matricno');
            return;
        }

        // Check if the `matricno` exists in the student table
        if (!$this->TransModel->studentExists($matricno)) {
            // show_error('Invalid matricno: Student not found');
            $this->load->view('paymentFail');
            return;
        }

        // Check if the `noCafe` exists in the cafe table
        if (!$this->TransModel->cafeExists($noCafe)) {
            // show_error('Invalid noCafe: Cafe not found');
            $this->load->view('paymentFail');
            return;
        }

        // Generate a unique transaction number
        $transactionNo = 'TRX' . date('YmdHis') . rand(1000, 9999);

        // Check if the student is eligible
        if ($this->TransModel->isEligible($matricno)) {
            // If eligible, process the payment transaction
            $transactionData = [
                'NO_TRANSAKSI' => $transactionNo,
                'NO_MATRIK' => $matricno,
                'STATUS' => 'berjaya',
                'TARIKH_DIBELANJAKAN' => date('Y-m-d H:i:s'),
                'NO_KAFE' => $noCafe
            ];

            $this->TransModel->addTransaction($transactionData);

            // Load the success view
            $this->load->view('paymentSuccess');
        } else {
            // If not eligible, record the failed transaction
            $transactionData = [
                'NO_TRANSAKSI' => $transactionNo,
                'NO_MATRIK' => $matricno,
                'STATUS' => 'gagal',
                'TARIKH_DIBELANJAKAN' => date('Y-m-d H:i:s'),
                'NO_KAFE' => $noCafe
            ];

            $this->TransModel->addTransaction($transactionData);

            // Load the failure view
            $this->load->view('paymentFail');
        }
    }


}
