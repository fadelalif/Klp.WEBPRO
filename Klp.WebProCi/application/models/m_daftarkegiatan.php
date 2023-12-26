<?php

class m_daftarkegiatan extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Memuat library database
    }

    public function tampilData() {
        // Ambil data nama_kegiatan dan aktivitas_kegiatan dari tabel kegiatan
        $this->db->select('id, nama_kegiatan, aktivitas_kegiatan, tanggal_kegiatan, batas_daftar, lokasi_kegiatan,deskripsi_kegiatan,ketentuan, uploadFile');
        $this->db->from('kegiatan'); // Ganti nama_tabel_kegiatan dengan nama tabel kegiatan Anda
        $query = $this->db->get();
        return $query->result(); // Mengembalikan hasil query sebagai array of objects
    }

    public function insertData($data) {
        $this->db->insert('kegiatan', $data);
    }

    public function getKegiatanById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('kegiatan');
        return $query->row();
    }
    
    public function updateKegiatan( $id, $nama_kegiatan, $aktivitas_kegiatan,$tanggal_kegiatan, $batas_daftar, $lokasi_kegiatan, $penanggung_jawab, $kategori, $provinsi, $deskripsi_kegiatan,$ketentuan, $uploadFile) {
        $data = array(
            'nama_kegiatan' => $nama_kegiatan,
            'aktivitas_kegiatan' => $aktivitas_kegiatan,
            'tanggal_kegiatan' => $tanggal_kegiatan,
            'batas_daftar' => $batas_daftar,
            'lokasi_kegiatan' => $lokasi_kegiatan,
            'penanggung_jawab' => $penanggung_jawab,
            'kategori' => $kategori,
            'provinsi' => $provinsi,
            'deskripsi_kegiatan'=> $deskripsi_kegiatan,
            'ketentuan'=> $ketentuan,
            'uploadFile'=> $uploadFile,
        );
    
        $this->db->where('id', $id);
        $this->db->update('kegiatan', $data);
    }

    public function hapusKegiatan($id) {
        $this->db->where('id', $id);
        return $this->db->delete('kegiatan');
    }
    
    
    
}
