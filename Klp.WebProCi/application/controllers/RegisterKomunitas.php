<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterKomunitas extends CI_Controller {

    function __construct(){
    parent::__construct();
    $this->load->model('m_komunitas');
    $this->load->library('form_validation');

    }
    public function index() {
    $data['komunitas'] = $this->m_komunitas->tampilData();
		$this->load->view('page/registerKom');
    }

    public function tambah() {

      // $this->form_validation->set_rules('re_password', 'Confirm Password', 'required|matches[password]');

      $config['upload_path'] = 'uploads/avatarKom';  // Sesuaikan dengan folder tempat menyimpan file
      $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf'; // Sesuaikan dengan tipe file yang diizinkan
      $config['max_size'] = 10000;  // Sesuaikan dengan ukuran maksimal file

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('uploadFoto')) {
          // Jika upload file gagal, tampilkan pesan error
          $error = array('error' => $this->upload->display_errors());
          print_r($error); // Display the error messages for debugging
          $this->load->view('page/registerKom.php', $error);
      } else {
          // Jika upload file berhasil, dapatkan data file
          $upload_data = $this->upload->data();
          $data = array(
          'nama_komunitas' => $this->input->post('nama_komunitas'),
          'email_komunitas' => $this->input->post('email_komunitas'),
          'password' => $this->input->post('password'),
          'nomorTlp_komunitas' => $this->input->post('nomorTlp_komunitas'),
          'penanggung_jawab' => $this->input->post('penanggung_jawab'),
          'kategori_komunitas' => $this->input->post('kategori_komunitas'),
          'deskripsi_komunitas'=> $this->input->post('deskripsi_komunitas'),
          'provinsi_komunitas' => $this->input->post('provinsi_komunitas'),
          'uploadFoto' => $upload_data['file_name']  // Nama file yang diunggah
          );

          // Simpan data ke database
          $this->m_komunitas->insertData($data);

          // Arahkan kembali ke halaman index
          redirect('RegisterKomunitas');
      }
  }

}
