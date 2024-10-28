<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TransModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }

    function getTransaction($date = NULL, $month = NULL)
    {
        $this->db->select('*');
        $this->db->from('PAYSABIL_TRANSACTION');
        $this->db->join('PAYSABIL_STUDENT','PAYSABIL_TRANSACTION.NO_MATRIK = PAYSABIL_STUDENT.NO_MATRIK');
        $this->db->join('PAYSABIL_CAFE','PAYSABIL_TRANSACTION.NO_KAFE = PAYSABIL_CAFE.NO_KAFE');
        // $this->db->where('TARIKH_DIBELANJAKAN', $date);
        if (!empty($date))
        {
            $this->db->where('DATE(TARIKH_DIBELANJAKAN)', $date);
        }
        
        if (!empty($month))
        {
            $date=NULL;
            $this->db->where('MONTH(TARIKH_DIBELANJAKAN)', $month);
        }

        $query = $this->db->get();
        return $query->result();
    }

    public function studentExists($matricno)
    {
        // Query the PAYSABIL_STUDENT table to see if the matricno exists
        $this->db->where('NO_MATRIK', $matricno);
        $query = $this->db->get('PAYSABIL_STUDENT');

        return $query->num_rows() > 0;
    }

    public function cafeExists($noCafe)
    {
        // Query the PAYSABIL_CAFE table to see if the noCafe exists
        $this->db->where('NO_KAFE', $noCafe);
        $query = $this->db->get('PAYSABIL_CAFE');

        return $query->num_rows() > 0;
    }

    function isEligible($NO_MATRIK)
    {
        $this->db->select('*');
        $this->db->where('NO_MATRIK', $NO_MATRIK);
        $query = $this->db->get('PAYSABIL_STUDENT', 1);

        return $query->num_rows() == 1? TRUE : FALSE;
    }

    public function addTransaction($data)
    {
        // Check if a transaction already exists with the same NO_MATRIK, NO_KAFE, and date (ignoring time)
        $this->db->where('NO_MATRIK', $data['NO_MATRIK']);
        $this->db->where('NO_KAFE', $data['NO_KAFE']);
        $this->db->where('DATE(TARIKH_DIBELANJAKAN)', date('Y-m-d', strtotime($data['TARIKH_DIBELANJAKAN'])));

        $query = $this->db->get('PAYSABIL_TRANSACTION');

        if ($query->num_rows() > 0) {
            // A redundant transaction exists, so skip insertion
            log_message('info', 'Redundant transaction detected for NO_MATRIK: ' . $data['NO_MATRIK'] . ' and NO_KAFE: ' . $data['NO_KAFE']);
            return false;
        }

        // If no redundant transaction exists, insert the new transaction
        return $this->db->insert('PAYSABIL_TRANSACTION', $data);
    }

}
