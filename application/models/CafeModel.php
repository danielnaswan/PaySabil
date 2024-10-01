<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CafeModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getCafeList()
    {
        $this->db->select('*');
        $query = $this->db->get('PAYSABIL_CAFE');
        return $query->result();
    }

    public function insertCafe($data)
    {
        $this->db->where('NO_KAFE', $data['NO_KAFE']);
        $query = $this->db->get('PAYSABIL_CAFE');
    
        if ($query->num_rows() > 0)
        {
            // NO_KAFE already exists
            return false;
        }
        else
        {
            // NO_KAFE does not exist, insert it
            $this->db->insert('PAYSABIL_CAFE', $data);
            return true;
        }
    }

    function updateCafe($data)
    {
        $this->db->where('NO_KAFE', $data['NO_KAFE']);
        $query = $this->db->get('PAYSABIL_CAFE');

        if($query->num_rows() == 1)
        {
            $this->db->where('NO_KAFE', $data['NO_KAFE']);
            $this->db->update('PAYSABIL_CAFE', $data);
            return TRUE; //data exist
        }
        else return FALSE;
    }

    public function generateNoKafe()
    {
        return 'KAFE' . time(); 
    }
}
