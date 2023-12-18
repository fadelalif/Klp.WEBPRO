<?php

class m_registerRelawan extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Memuat library database
    }

    public function tampilData() {
        // Ambil data nama_kegiatan dan aktivitas_kegiatan dari tabel kegiatan
        $this->db->select('id, firstname, lastname, email, username, password, nmrTelphone, tgl_lahir, jenis_kelamin, pekerjaan, institusi, provinsi');
        $this->db->from('register_relawan'); // Ganti nama_tabel_kegiatan dengan nama tabel kegiatan Anda
        $query = $this->db->get();
        return $query->result(); // Mengembalikan hasil query sebagai array of objects
    }

    public function insertData($data) {
        $this->db->insert('register_relawan', $data);
    }

    public function getKegiatanById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('register_relawan');
        return $query->row();
    }

    
}