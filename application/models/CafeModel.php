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

    function deleteCafe($noCafe)
{
    // Check if the cafe exists
    $this->db->where('NO_KAFE', $noCafe);
    $query = $this->db->get('PAYSABIL_CAFE');

    if ($query->num_rows() === 1) {
        // Delete the cafe if it exists
        $this->db->where('NO_KAFE', $noCafe);
        return $this->db->delete('PAYSABIL_CAFE');
    } else {
        // Return false if no cafe is found
        return false;
    }
}


    public function generateNoKafe()
    {
        return 'KAFE' . time(); 
    }

    function addQRData($data)
    {
        $this->db->where('NO_KAFE',$data['NO_KAFE']);
        $this->db->update('PAYSABIL_CAFE', [
            'IMEJ_QR' => $data['IMEJ_QR'],
            'CREATED_AT' => $data['CREATED_AT']
        ]);
    }

    function getQRImage($data)
    {
        $this->db->select('IMEJ_QR');
        $this->db->where('NO_KAFE', $data);
        $query = $this->db->get('PAYSABIL_CAFE');
    
        if ($query->num_rows() === 1) {
            return $query->row()->IMEJ_QR;
        } else {
            return null;
        }
    }
    
}
