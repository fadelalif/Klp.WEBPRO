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
            // Successful login for a user
            redirect('Dashboard');
        } elseif ($role == "komunitas") {
            // Successful login for a komunitas
            redirect('DashboardKomunitas');
        } else {
            // Invalid credentials
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('Login');
        }
    }
}
