<?php

class m_daftarberita extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function tampilBerita() {
        $this->db->select('id, nama_berita, isi_berita, gambar_berita, tanggal_berita');
        $this->db->from('berita_konten');
        $query = $this->db->get();
        return $query->result();
    }

    public function delete_berita($id) {
        $this->db->where('id', $id);
        return $this->db->delete('berita_konten');
    }

    public function getUserById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('berita_konten');
        return $query->row();
    }

    public function updateberita($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('berita_konten', $data); // Sesuaikan dengan nama tabel yang sesuai
    }

    public function insertData($data) {
        $this->db->insert('berita_konten', $data);
    }
}