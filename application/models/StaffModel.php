<?php

class StaffModel extends CI_Model {
    
    public function loginUser($data){
        // Fetch user record from the database using staff_id
        $this->db->where('STAFF_ID', $data['staff_id']);
        $query = $this->db->get('PAYSABIL_STAFF', 1); // Limit the result to 1 row
        
        if($query->num_rows() == 1)
        {
            $user = $query->row();
            
            $hash = password_hash($data['password'], PASSWORD_BCRYPT);
            
            if (password_verify($data['password'], $hash)) {
                return $user;  // Return the user record if password matches
            } else {
                return false;  // Incorrect password
            }
        }
        else
        {
            return false; // User not found
        }
    }
}
