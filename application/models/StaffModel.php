<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class StaffModel extends CI_Model
{
    function loginUser($data)
    {
        $this->db->select('*');
        $this->db->where('STAFF_ID', $data['staff_id']);
        $this->db->where('PASSWORD', $data['password']);
        $this->db->from('PAYSABIL_STAFF');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1)
        {
            return $query->row();
        }
        else
        {
            return false;
        }
    }
}
