<?php

class m_daftarkegiatan extends CI_Model {
    public function tampilData() {
        // Ambil data nama_kegiatan dan judul_kegiatan dari tabel kegiatan
        $this->db->select('nama_kegiatan, judul_kegiatan');
        $this->db->from('table_kegiatan'); // Ganti nama_tabel_kegiatan dengan nama tabel kegiatan Anda
        $query = $this->db->get();
        return $query->result(); // Mengembalikan hasil query sebagai array of objects
    }

    public function insertData($data) {
        $this->db->insert('table_kegiatan', $data);
    }

    public function getKegiatanByNama($nama_kegiatan) {
        $this->db->where('nama_kegiatan', $nama_kegiatan);
        $query = $this->db->get('table_kegiatan');
        return $query->row();
    }
    
    public function updateKegiatan($nama_kegiatan, $judul_kegiatan, $lokasi_kegiatan, $penanggung_jawab, $kagori, $provinsi, $deskripsi_kegiatan) {
        $data = array(
            'nama_kegiatan' => $nama_kegiatan,
            'judul_kegiatan' => $judul_kegiatan,
            'tanggal_kegiatan' => $tgl_kegiatan,
            'lokasi_kegiatan' => $lokasi_kegiatan,
            'penanggung_jawab' => $penanggung_jawab,
            'kategori_kegiatan' => $kategori,
            'provinsi' => $provinsi,
            'deskripsi_kegiatan'=> $deskripsi_kegiatan
        );
    
        $this->db->where('nama_kegiatan', $nama_kegiatan);
        $this->db->update('table_kegiatan', $data);
    }

    public function hapusKegiatan($nama_kegiatan) {
        $this->db->where('nama_kegiatan', $nama_kegiatan);
        return $this->db->delete('table_kegiatan');
    }
    
    
    
}
