<?php

class m_daftarrelawan extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function tampilData() {
        $this->db->select('id, firstname, lastname, email, username, password, nmrTelphone, tgl_lahir, jenis_kelamin, pekerjaan, institusi, provinsi, uploadFoto');
        $this->db->from('register_relawan');
        $query = $this->db->get();
        return $query->result();
    }

    public function delete_data($id) {
        $this->db->where('id', $id);
        return $this->db->delete('register_relawan');
    }

    public function getUserById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('register_relawan');
        return $query->row();
    }

    public function insertData($data) {
        $this->db->insert('register_relawan', $data);
    }

    public function updaterelawan($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('register_relawan', $data); // Sesuaikan dengan nama tabel yang sesuai
    }

    public function get_user_details($id) {
        $query = $this->db->get_where('register_relawan', array('id' => $id));
        return $query->row();
    }
}


