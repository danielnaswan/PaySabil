<?php
class Test_model extends CI_Model {
    public function test_connection() {
        $query = $this->db->query("SELECT 1 as result");
        return $query->row()->result;
    }

    public function getData() {
        $query = $this->db->query("SELECT * FROM PAYSABIL_USER");
        return $query->result();
    }
}
?>
