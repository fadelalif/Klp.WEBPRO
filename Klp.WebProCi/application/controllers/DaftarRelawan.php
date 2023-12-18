<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarRelawan extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('m_daftarrelawan');
        $this->load->library('form_validation');
    }
    public function index() {
        $data['data'] = $this->m_daftarrelawan->tampilData();
        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/navAdmin');
        $this->load->view('admin/sidebarAdmin');
        $this->load->view('admin/relawanUser/daftarRelawan', $data);
        // $this->load->view('admin/footerAdmin');
    }

    public function tambahHalaman(){
        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/navAdmin');
        $this->load->view('admin/sidebarAdmin');
        $this->load->view('admin/relawanUser/tambahUser');
    }

    public function hapus($id){
        if ($this->m_daftarrelawan->delete_data($id)) {
            redirect('DaftarRelawan');
        } else {
            redirect('DaftarRelawan');
        }
    }

    public function edit($id){
        $data['data'] = $this->m_daftarrelawan->getUserById($id);
        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/navAdmin');
        $this->load->view('admin/sidebarAdmin');
        $this->load->view('admin/relawanUser/editUser', $data);
    }

    public function update($id) {
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nmrTelphone = $this->input->post('nmrTelphone');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $pekerjaan = $this->input->post('pekerjaan');
        $institusi = $this->input->post('institusi');
        $provinsi = $this->input->post('provinsi');

        $this->m_daftarrelawan->updaterelawan($id, $firstname, $lastname, $email, $username, $password, $nmrTelphone, $tgl_lahir, $jenis_kelamin, $pekerjaan, $institusi, $provinsi);
        redirect('DaftarRelawan');
    }

    public function tambah(){
        $this->form_validation->set_rules('firstname', 'Nama Depan DaftarRelawan', 'required');
        $this->form_validation->set_rules('lastname', 'Nama belakang DaftarRelawan', 'required');
        $this->form_validation->set_rules('email', 'Email DaftarRelawan', 'required');
        $this->form_validation->set_rules('username', 'Username DaftarRelawan', 'required');
        $this->form_validation->set_rules('password', 'Password DaftarRelawan', 'required');
        $this->form_validation->set_rules('nmrTelphone', 'Nomor Telphone DaftarRelawan', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'tanggal lahir DaftarRelawan', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin DaftarRelawan', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan DaftarRelawan', 'required');
        $this->form_validation->set_rules('institusi', 'Institusi DaftarRelawan', 'required');

        if ($this->form_validation->run() === FALSE) {
            // If validation fails, reload the view with validation errors
            echo '<script>alert("Data harus diisi");</script>';
            $this->load->view('admin/relawanUser/daftarRelawan.php');
        } else {
            $data = array(
                $firstname = $this->input->post('firstname'),
                $lastname = $this->input->post('lastname'),
                $email = $this->input->post('email'),
                $username = $this->input->post('username'),
                $password = $this->input->post('password'),
                $nmrTelphone = $this->input->post('nmrTelphone'),
                $tgl_lahir = $this->input->post('tgl_lahir'),
                $jenis_kelamin = $this->input->post('jenis_kelamin'),
                $pekerjaan = $this->input->post('pekerjaan'),
                $institusi = $this->input->post('institusi'),
                $provinsi = $this->input->post('provinsi')
            );
            $this->m_daftarrelawan->insertData($id, $firstname, $lastname, $email, $username, $password, $nmrTelphone, $tgl_lahir, $jenis_kelamin, $pekerjaan, $institusi, $provinsi);
            redirect('DaftarRelawan/index');
        }
    }


    public function view(){
        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/navAdmin');
        $this->load->view('admin/sidebarAdmin');
        $this->load->view('admin/relawanUser/viewUser');
    }

    public function tampilanUser($id){
        $data['data'] = $this->m_daftarrelawan->getUserById($id);
        $this->load->view('viewUser', $data);
    }
}
