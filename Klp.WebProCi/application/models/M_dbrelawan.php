<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_dbrelawan extends CI_Model {
    function getData() {
        $query = $this->db->get('relawan');
        return $query->result();
    }
    function insertData($data){
        $this->db->insert('relawan',$data);
    }
}    