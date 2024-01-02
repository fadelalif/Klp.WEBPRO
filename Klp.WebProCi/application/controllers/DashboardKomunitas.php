<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardKomunitas extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('m_daftarkegiatan');
    $this->load->model('m_logIn');
    $this->load->library('session');

  }  

    public function index() {
    $user_id = $this->session->userdata('user_id');
    $data['kegiatan'] = $this->m_daftarkegiatan->tampilDataByUserId($user_id);
		$this->load->view('komunitas/dashboardKomunitas',$data);
    }

    public function detail($id) {
      $data['kegiatan'] = $this->m_daftarkegiatan->getKegiatanById($id);
      if ($data['kegiatan']) {
          $this->load->view('komunitas/detailKegiatan', $data);
      } else {
          // Kegiatan tidak ditemukan, arahkan kembali atau tampilkan pesan kesalahan
          redirect('DashboardKomunitas');
      }
  }
}
