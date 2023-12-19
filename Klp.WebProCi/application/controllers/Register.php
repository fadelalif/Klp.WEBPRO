<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('m_registerRelawan');
      $this->load->library('form_validation');

    }

    public function index() {
      $data['relawan'] = $this->m_registerRelawan->tampilData();
		$this->load->view('page/register',$data);
    }

    public function tambah() {
      $this->form_validation->set_rules('firstname', 'First Name', 'required');
      $this->form_validation->set_rules('lastname', 'Last Name', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('konf_password', 'Confirm Password', 'required|matches[password]');
      $this->form_validation->set_rules('nmrTelphone', 'Nomor Telphone', 'required');

      if ($this->form_validation->run() === FALSE) {
          // If validation fails, reload the view with validation errors
          echo '<script>alert("Data harus diisi");</script>';
          $this->load->view('page/register.php');
      } else {

            $data = array(
              'firstname' => $this->input->post('firstname'),
              'lastname' => $this->input->post('lastname'),
              'email' => $this->input->post('email'),
              'username' => $this->input->post('username'),
              'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
              'nmrTelphone' => $this->input->post('nmrTelphone'),
              'tgl_lahir' => $this->input->post('tgl_lahir'),
              'jenis_kelamin' => $this->input->post('jenis_kelamin'),
              'pekerjaan' => $this->input->post('pekerjaan'),
              'institusi' => $this->input->post('institusi'),
              'provinsi' => $this->input->post('provinsi'),
            );

            // Simpan data ke database
          $this->m_registerRelawan->insertData($data);

          // Arahkan kembali ke halaman index
          redirect('Register');
    }
  }
}
