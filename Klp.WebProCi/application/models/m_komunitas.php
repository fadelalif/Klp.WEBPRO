<?php

class m_komunitas extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Memuat library database
    }

    public function tampilData() {
        // Ambil data nama_kegiatan dan aktivitas_kegiatan dari tabel kegiatan
        $this->db->select('id, nama_komunitas, email_komunitas, password, nomorTlp_komunitas,penanggung_jawab, kategori_komunitas, deskripsi_komunitas, provinsi_komunitas, uploadFoto');
        $this->db->from('komunitas'); // Ganti nama_tabel_kegiatan dengan nama tabel kegiatan Anda
        $query = $this->db->get();
        return $query->result(); // Mengembalikan hasil query sebagai array of objects
    }

    public function insertData($data) {
        $this->db->insert('komunitas', $data);
    }

    public function getKegiatanById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('komunitas');
        return $query->row();
    }

    
}