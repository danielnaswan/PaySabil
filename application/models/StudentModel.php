<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentModel extends CI_Model {

    // Function to search for students
    public function search_students($searchData)
    {
        $this->db->select('*');
        $this->db->from('PAYSABIL_STUDENT');

        // Dynamically build the query based on input
        if (!empty($searchData['no_matrik'])) {
            $this->db->like('no_matrik', $searchData['no_matrik']);
        }

        if (!empty($searchData['nama'])) {
            $this->db->like('nama', $searchData['nama']);
        }

        if (!empty($searchData['sesi'])) {
            $this->db->like('sesi', $searchData['sesi']);
        }

        if (!empty($searchData['sem'])) {
            $this->db->like('sem', $searchData['sem']);
        }

        // Execute the query
        $query = $this->db->get();
        return $query->result_array();
    }
}
