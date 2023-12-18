<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarKomunitas extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('m_daftarkomunitas');
        $this->load->library('form_validation');
    }
    public function index() {
        $data['data'] = $this->m_daftarkomunitas->tampilDataFix();
        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/navAdmin');
        $this->load->view('admin/sidebarAdmin');
        $this->load->view('admin/komunitasUser/daftarKomunitas', $data);
        // $this->load->view('admin/footerAdmin');
    }

    public function index2() {
        $data['data'] = $this->m_daftarkomunitas->tampilData_BlmFix();
        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/navAdmin');
        $this->load->view('admin/sidebarAdmin');
        $this->load->view('admin/komunitasUser/daftarKomunitas', $data);
        // $this->load->view('admin/footerAdmin');
    }

    public function hapus($id){
        if ($this->m_daftarkomunitas->delete_data($id)) {
            redirect('DaftarKomunitas');
        } else {
            redirect('DaftarKomunitas');
        }
    }

    public function approveAccount($id) {
        $this->load->model('m_daftarkomunitas');
        $this->m_daftarkomunitas->approveAccount($id);

        redirect('admin/komunitasUser/daftarKomunitas');
    }

    
}