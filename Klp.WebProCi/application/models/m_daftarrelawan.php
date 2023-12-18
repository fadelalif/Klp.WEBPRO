<?php

class m_daftarrelawan extends CI_Model {
    public function tampilData() {
        $this->db->select('id, firstname, lastname, email, username, password, nmrTelphone, tgl_lahir, jenis_kelamin, pekerjaan, institusi, provinsi');
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

    public function updaterelawan($id, $firstname, $lastname, $email, $username, $password, $nmrTelphone, $tgl_lahir, $jenis_kelamin, $pekerjaan, $institusi, $provinsi) {
        $data = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'nmrTelphone' => $nmrTelphone,
            'tgl_lahir' => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'pekerjaan' => $pekerjaan,
            'institusi' => $institusi,
            'provinsi' => $provinsi
        );
    
        $this->db->where('id', $id);
        $this->db->update('register_relawan', $data);
    }

    public function insertData($id, $firstname, $lastname, $email, $username, $password, $nmrTelphone, $tgl_lahir, $jenis_kelamin, $pekerjaan, $institusi, $provinsi){
        $data = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'nmrTelphone' => $nmrTelphone,
            'tgl_lahir' => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'pekerjaan' => $pekerjaan,
            'institusi' => $institusi,
            'provinsi' => $provinsi
        );
        $this->db->insert('register_relawan', $data);
    }
}