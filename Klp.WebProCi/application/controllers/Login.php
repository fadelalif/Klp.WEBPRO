<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function index() {
		$this->load->view('page/login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($username == 'vidya' && $password == '1234') {
            redirect('Dashboard');
        } elseif ($username == 'CahayaDaun' && $password == '12345') {
            redirect('DashboardKomunitas');
        } elseif ($username == 'risky' && $password == '123456'){
            redirect('daftarRelawan/index');
        } else{
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('Login');
        }
    }
}
