<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TransModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }

    function getTransaction($today)
    {
        $this->db->select('*');
        $this->db->from('PAYSABIL_TRANSACTION');
        $this->db->join('PAYSABIL_STUDENT','PAYSABIL_TRANSACTION.NO_MATRIK = PAYSABIL_STUDENT.NO_MATRIK');
        $this->db->join('PAYSABIL_CAFE','PAYSABIL_TRANSACTION.NO_KAFE = PAYSABIL_CAFE.NO_KAFE');
        $this->db->where('PAYSABIL_CAFE.NO_KAFE', '123');
        // $this->db->where('TARIKH_DIBELANJAKAN', $today);

        $query = $this->db->get();
        return $query->result();
    }
}
