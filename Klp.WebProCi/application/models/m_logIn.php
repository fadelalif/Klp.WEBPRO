<?php

class m_logIn extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Memuat library database
    }

    public function check_credentials($username, $password)
    {
    // Fetch user from m_registerRelawan table based on username
    $this->db->where('username', $username);
    $this->db->or_where('email', $username);
    $user = $this->db->get('register_relawan')->row();
    
    if ($user && password_verify($password, $user->password)) {
        // Password is correct for a user
        return "user";
    }

    // Fetch data from the 'komunitas' table based on username
    $komunitas = $this->db->get_where('komunitas', array('email_komunitas' => $username))->row();

    if ($komunitas && password_verify($password, $komunitas->password)) {
        // Password is correct for a komunitas
        return "komunitas";
    }

    return false;
    }

    
}