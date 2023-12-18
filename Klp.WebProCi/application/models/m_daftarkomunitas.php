<?php

class m_daftarkomunitas extends CI_Model {
    public function tampilDataFix() {
        $this->db->select('id, nama_komunitas, email_komunitas, password, nomorTlp_komunitas,penanggung_jawab, kategori_komunitas, deskripsi_komunitas, provinsi_komunitas, uploadFoto');
        $this->db->from('komunitas');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampilData_BlmFix() {
        $this->db->select('id, nama_komunitas, email_komunitas, password, nomorTlp_komunitas,penanggung_jawab, kategori_komunitas, deskripsi_komunitas, provinsi_komunitas, uploadFoto');
        $this->db->from('komunitas_status');
        $query = $this->db->get();
        return $query->result();
    }

    public function getUserById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('komunitas');
        return $query->row();
    }

    public function delete_data($id) {
        $this->db->where('id', $id);
        return $this->db->delete('komunitas');
    }

    public function approveAccount($id) {
        // Ambil data user yang akan disetujui
        $data = $this->getUserById($id);

        // Pastikan data user ditemukan
        if ($data) {
            // Set status persetujuan ke 1 (disetujui)
            $this->db->where('id', $id);
            $this->db->update('komunitas_status', ['is_approved' => 1]);

            // Simpan data ke dalam tabel yang sesuai (misalnya, tabel yang menyimpan data akun yang disetujui)
            $approvedData = [
                'nama_komunitas' => $data->nama_komunitas,
                'email_komunitas' => $data->email_komunitas,
                'password' => $data->passdword,
                'nomorTlp_komunitas' => $data->nomorTlp_komunitas,
                'penanggung_jawab' => $data->penanggung_jawab,
                'kategori_komunitas' => $data->kategori_komunitas,
                'deskripsi_komunitas' => $data->deskripsi_komunitas,
                'provinsi_komunitas' => $data->provinsi_komunitas,
                'uploadFoto' => $data->uploadFoto,
                // Tambahkan kolom-kolom lain yang perlu disimpan
            ];

            $this->db->insert('komunitas', $approvedData);
        }
    }
}