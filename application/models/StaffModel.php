<?php

class StaffModel extends CI_Model {
    
    public function loginUser($data){
        // $this->db->select('*');
        // $this->db->where('STAFF_ID', $data['staff_id']);
        // $this->db->where('PASSWORD', $data['password']);
        // $this->db->from('PAYSABIL_STAFF');
        // $this->db->limit(1);
        // $query = $this->db->get();
        $query = $this->db->get_where('PAYSABIL_STAFF', $data,1);
        // $sql = "SELECT * FROM PAYSABIL_USER WHERE STAFF_ID = ? AND PASSWORD = ? LIMIT 1";
        // $query = $this->db->query($sql, array($data['staff_id'], $data['password']));
        
        if($query->num_rows() == 1)
        {
            return $query->row();
        }
        else
        {
            return false;
        }
    }
}
