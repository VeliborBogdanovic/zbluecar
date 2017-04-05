<?php


class Meni_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function meni()
            {
               $query = $this->db->get('meni');
                 return $query->result();
            }
    
}

