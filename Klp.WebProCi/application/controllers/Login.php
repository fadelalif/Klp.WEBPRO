<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_logIn');
        $this->load->library('form_validation');
        $this->load->library('session');

    }
    public function index() {
		$this->load->view('page/login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->m_logIn->check_credentials($username, $password);

        if ($role == "user") {
            $user_id = $this->m_logIn->getUserId($username);
            // Set user ID in session
            $this->session->set_userdata('user_id', $user_id);
            // echo $user_id;
            // Successful login for a user
            redirect('Dashboard');
        } elseif ($role == "komunitas") {
            $komunitas_id = $this->m_logIn->getKomunitasId($username);
            // Set komunitas ID in session
            $this->session->set_userdata('komunitas_id', $komunitas_id);
            // echo $komunitas_id;
            // Successful login for a komunitas
            redirect('DashboardKomunitas');
        } else {
            // Invalid credentials
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('Login');
        }
    }
}
