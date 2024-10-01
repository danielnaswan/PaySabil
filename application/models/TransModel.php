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
}
