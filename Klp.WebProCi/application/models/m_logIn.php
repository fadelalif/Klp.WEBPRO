<?php

class m_logIn extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Memuat library database
        $this->load->library('session');
    }

    public function check_credentials($username, $password)
    {
        // Fetch user from m_registerRelawan table based on username
        $this->db->where('username', $username);
        $this->db->or_where('email', $username);
        $user = $this->db->get('register_relawan')->row();

        if ($user && password_verify($password, $user->password)) {
            $this->create_session($user->id);
            // Password is correct for a user
            return "user";
        }

        // Fetch data from the 'komunitas' table based on username
        $komunitas = $this->db->get_where('komunitas', array('email_komunitas' => $username))->row();

        if ($komunitas && password_verify($password, $komunitas->password)) {
            $this->create_session($komunitas->id, $komunitas->email_komunitas, 'komunitas');
            // Password is correct for a komunitas
            return "komunitas";
        }
        if (($username == "SuperAdmin") && ($password == "Admin")) {

            $this->create_session(0, $user->username, 'admin');
            // Password is correct for a komunitas
            return "admin";
        }
        return false;


    }

    public function getUserId($username)
    {
        // Assuming you have a table named 'users' with columns 'user_id' and 'username'
        $query = $this->db->get_where('register_relawan', array('username' => $username));

        if ($query->num_rows() > 0) {
            // Get the user ID from the result
            $user = $query->row();
            return $user->id;
        } else {
            // User not found
            return false;
        }
    }

    public function getKomunitasId($username)
    {
        // Assuming you have a table named 'users' with columns 'user_id' and 'username'
        $query = $this->db->get_where('komunitas', array('email_komunitas' => $username));

        if ($query->num_rows() > 0) {
            // Get the user ID from the result
            $user = $query->row();
            return $user->id;
        } else {
            // User not found
            return false;
        }
    }

    public function create_session($user_id)
    {
        // Create session for the user
        $this->session->set_userdata('user_id', $user_id);
    }


}