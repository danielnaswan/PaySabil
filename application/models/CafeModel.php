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
}
