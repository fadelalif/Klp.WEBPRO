<?php

class M_daftarkomunitas extends CI_Model {

    public function tampilDataFix() {
        $this->db->select('id, nama_komunitas, email_komunitas, password, nomorTlp_komunitas,penanggung_jawab, kategori_komunitas, deskripsi_komunitas, provinsi_komunitas, uploadFoto');
        $this->db->from('komunitas');
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

    // public function insertDataKomunitas($id, $nama_komunitas, $email_komunitas, $password, $nomorTlp_komunitas,$penanggung_jawab, $kategori_komunitas, $deskripsi_komunitas, $provinsi_komunitas, $uploadFoto){
    //     $data = array(
    //         'nama_komunitas' => $nama_komunitas,
    //         'email_komunitas' => $email_komunitas,
    //         'password' => $password,
    //         'nomorTlp_komunitas' => $nomorTlp_komunitas,
    //         'penanggung_jawab' => $penanggung_jawab,
    //         'kategori_komunitas' => $kategori_komunitas,
    //         'deskripsi_komunitas' => $deskripsi_komunitas,
    //         'provinsi_komunitas' => $provinsi_komunitas,
    //         'uploadFoto' => $uploadFoto
    //     );
    //     $this->db->insert('komunitas', $data);
    // }

    public function get_user_details($id) {
        $query = $this->db->get_where('komunitas', array('id' => $id));
        return $query->row();
    }

    public function updatekomunitas($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('komunitas', $data); // Sesuaikan dengan nama tabel yang sesuai
    }

    // Buat daftar Komunitas ACC

    public function tampilDataBlmFix() {
        $this->db->select('id, nama_komunitas, email_komunitas, password, nomorTlp_komunitas,penanggung_jawab, kategori_komunitas, deskripsi_komunitas, provinsi_komunitas, uploadFoto');
        $this->db->from('komunitas_status');
        $query = $this->db->get();
        return $query->result();
    }

    public function getUserByIdAcc($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('komunitas_status');
        return $query->row();
    }

    public function delete_dataAcc($id) {
        $this->db->where('id', $id);
        return $this->db->delete('komunitas_status');
    }

    public function approveAccount($id) {
        // Ambil data user yang akan disetujui
        $data = $this->getUserByIdAcc($id);

        // Pastikan data user ditemukan
        if ($data) {
            // Set status persetujuan ke 1 (disetujui)
            $this->db->where('id', $id);
            $this->db->update('komunitas_status', ['approved' => 0]);

            // Simpan data ke dalam tabel yang sesuai (misalnya, tabel yang menyimpan data akun yang disetujui)
            $approvedData = [
                'id' => $data->id,
                'nama_komunitas' => $data->nama_komunitas,
                'email_komunitas' => $data->email_komunitas,
                'password' => $data->password,
                'nomorTlp_komunitas' => $data->nomorTlp_komunitas,
                'penanggung_jawab' => $data->penanggung_jawab,
                'kategori_komunitas' => $data->kategori_komunitas,
                'deskripsi_komunitas' => $data->deskripsi_komunitas,
                'provinsi_komunitas' => $data->provinsi_komunitas,
                'uploadFoto' => $data->uploadFoto,
            ];

            // Hanya perlu insert jika update berhasil
            if ($this->db->affected_rows() > 0) {
                $this->db->insert('komunitas', $approvedData);
            } else {
                // Penanganan kesalahan
                log_message('error', 'Gagal menyimpan persetujuan akun: ' . $this->db->error()['message']);
            }
        }
    }
}
