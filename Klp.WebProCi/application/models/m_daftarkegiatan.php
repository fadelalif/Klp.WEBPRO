<?php


// class m_daftarkegiatan extends CI_Model {
//     public function tampilData() {
//         // Ambil data nama_kegiatan dan judul_kegiatan dari tabel kegiatan
//         $this->db->select('nama_kegiatan, judul_kegiatan');
//         $this->db->from('table_kegiatan'); // Ganti nama_tabel_kegiatan dengan nama tabel kegiatan Anda
//         $query = $this->db->get();
//         return $query->result(); // Mengembalikan hasil query sebagai array of objects
//     }

//     public function insertData($data) {
//         $this->db->insert('table_kegiatan', $data);
//     }

//     public function getKegiatanByNama($nama_kegiatan) {
//         $this->db->where('nama_kegiatan', $nama_kegiatan);
//         $query = $this->db->get('table_kegiatan');
//         return $query->row();
//     }

//     public function updateKegiatan($nama_kegiatan, $judul_kegiatan, $lokasi_kegiatan, $penanggung_jawab, $kagori, $provinsi, $deskripsi_kegiatan) {
//         $data = array(
//             'nama_kegiatan' => $nama_kegiatan,
//             'judul_kegiatan' => $judul_kegiatan,
//             'tanggal_kegiatan' => $tgl_kegiatan,
//             'lokasi_kegiatan' => $lokasi_kegiatan,
//             'penanggung_jawab' => $penanggung_jawab,
//             'kategori_kegiatan' => $kategori,
//             'provinsi' => $provinsi,
//             'deskripsi_kegiatan'=> $deskripsi_kegiatan
//         );

//         $this->db->where('nama_kegiatan', $nama_kegiatan);
//         $this->db->update('table_kegiatan', $data);
//     }

//     public function hapusKegiatan($nama_kegiatan) {
//         $this->db->where('nama_kegiatan', $nama_kegiatan);
//         return $this->db->delete('table_kegiatan');
//     }

class m_daftarkegiatan extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Memuat library database
    }

    public function tampilData()
    {
        // Ambil data nama_kegiatan dan aktivitas_kegiatan dari tabel kegiatan
        $this->db->select('id, nama_kegiatan, aktivitas_kegiatan, tanggal_kegiatan, batas_daftar, lokasi_kegiatan,deskripsi_kegiatan,ketentuan, uploadFile');
        $this->db->from('kegiatan'); // Ganti nama_tabel_kegiatan dengan nama tabel kegiatan Anda
        $query = $this->db->get();
        return $query->result(); // Mengembalikan hasil query sebagai array of objects
    }

    public function insertData($data)
    {
        $this->db->insert('kegiatan', $data);
    }

    public function getKegiatanById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('kegiatan');
        return $query->row();
    }
    public function getNamaKomunitasById($id_komunitas)
    {
        $this->db->select('nama_komunitas');
        $this->db->where('id', $id_komunitas);
        $query = $this->db->get('komunitas');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->nama_komunitas;
        } else {
            return '';
        }
    }


    public function updateKegiatan($id, $nama_kegiatan, $aktivitas_kegiatan, $tanggal_kegiatan, $batas_daftar, $lokasi_kegiatan, $penanggung_jawab, $kategori, $provinsi, $deskripsi_kegiatan, $ketentuan, $uploadFile)
    {
        $data = array(
            'nama_kegiatan' => $nama_kegiatan,
            'aktivitas_kegiatan' => $aktivitas_kegiatan,
            'tanggal_kegiatan' => $tanggal_kegiatan,
            'batas_daftar' => $batas_daftar,
            'lokasi_kegiatan' => $lokasi_kegiatan,
            'penanggung_jawab' => $penanggung_jawab,
            'kategori' => $kategori,
            'provinsi' => $provinsi,
            'deskripsi_kegiatan' => $deskripsi_kegiatan,
            'ketentuan' => $ketentuan,
            'uploadFile' => $uploadFile,
        );

        $this->db->where('id', $id);
        $this->db->update('kegiatan', $data);
    }

    public function hapusKegiatan($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('kegiatan');
    }

    public function tampilDataByUserId($user_id)
    {
        $this->db->where('user', $user_id);
        return $this->db->get('kegiatan')->result();
    }

    public function getDataWithKomunitasName()
{
    // Assuming you have a relationship between m_daftarkegiatan.user and m_komunitas.id
    $this->db->select('kegiatan.*, komunitas.nama_komunitas');
    $this->db->from('kegiatan');
    $this->db->join('komunitas', 'kegiatan.user = komunitas.id');
    
    // Add any other conditions or order by if needed
    // $this->db->where('m_daftarkegiatan.some_column', $some_value);
    
    $query = $this->db->get();
    
    return $query->result();
}
    
    
    
}
