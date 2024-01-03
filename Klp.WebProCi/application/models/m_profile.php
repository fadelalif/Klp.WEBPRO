<?php
class m_profile extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    public function getUserProfile($user_id)
    {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('register_relawan');

        return $query->row();
    }
    public function updateProfile($user_id, $data)
    {
        $this->db->where('user_id', $user_id);
        $this->db->update('register_relawan', $data);
    }

    // ... tambahkan fungsi lain sesuai kebutuhan
}