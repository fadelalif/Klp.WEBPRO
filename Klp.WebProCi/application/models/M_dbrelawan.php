<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_dbrelawan extends CI_Model {
    public function getData() {
        $this->db->select('id, nama, email, no_tlp, alasan, pengalaman');
        $this->db->from('relawan');
        $query = $this->db->get();
        return $query->result();
    }
    public function insertData($data){
        $this->db->insert('relawan',$data);
    }
}    