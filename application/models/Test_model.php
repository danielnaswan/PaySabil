<?php
class Test_model extends CI_Model {
    public function test_connection() {
        $query = $this->db->query("SELECT 1 as result");
        return $query->row()->result;
    }
}
?>
