<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarKomunitas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_daftarkomunitas');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['data'] = $this->m_daftarkomunitas->tampilDataFix();
        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/navAdmin');
        $this->load->view('admin/sidebarAdmin');
        $this->load->view('admin/komunitasUser/daftarKomunitasFix', $data);
        $this->load->view('admin/footerAdmin');
    }

    public function hapus($id) {
        if ($this->m_daftarkomunitas->delete_data($id)) {
            redirect('DaftarKomunitas/index');
        } else {
            redirect('DaftarKomunitas/index');
        }
    }

    // Buat Komunitas Table ACC

    public function index2() {
        $data['data'] = $this->m_daftarkomunitas->tampilDataBlmFix();
        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/navAdmin');
        $this->load->view('admin/sidebarAdmin');
        $this->load->view('admin/komunitasUser/daftarKomunitasAcc', $data);
        $this->load->view('admin/footerAdmin');
    }

    public function hapusAcc($id) {
        if ($this->m_daftarkomunitas->delete_dataAcc($id)) {
            redirect('DaftarKomunitas/index2');
        } else {
            redirect('DaftarKomunitas/index2');
        }
    }

    public function approveAccount($id) {
        // Cek apakah tombol "Setujui" ditekan
        if ($this->input->post('approve') == 1) {
            // Panggil model untuk melakukan persetujuan akun
            $this->m_daftarkomunitas->approveAccount($id);
            $this->m_daftarkomunitas->delete_dataAcc($id);

            // Redirect ke halaman setelah persetujuan
            redirect('DaftarKomunitas/index2');
        } else {
            $this->hapusAcc($id);
            redirect('DaftarKomunitas/index2');
        }
    }

    public function edit($id){
        $data['data'] = $this->m_daftarkomunitas->getUserById($id);
        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/navAdmin');
        $this->load->view('admin/sidebarAdmin');
        $this->load->view('admin/komunitasUser/editKomunitas', $data);
    }

    public function update($id) {
        $config['upload_path'] = 'uploads/avatarKom';  
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
        $config['max_size'] = 10000;  
    
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
    
        if (!$this->upload->do_upload('uploadFoto')) {
            // Jika upload file gagal, tampilkan pesan error
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            redirect('DaftarKomunitas');
        } else {
            $upload_data = $this->upload->data();
            $data = array(
                'nama_komunitas' => $this->input->post('nama_komunitas'),
                'email_komunitas' => $this->input->post('email_komunitas'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'nomorTlp_komunitas' => $this->input->post('nomorTlp_komunitas'),
                'penanggung_jawab' => $this->input->post('penanggung_jawab'),
                'kategori_komunitas' => $this->input->post('kategori_komunitas'),
                'deskripsi_komunitas'=> $this->input->post('deskripsi_komunitas'),
                'provinsi_komunitas' => $this->input->post('provinsi_komunitas'),
                'uploadFoto' => $upload_data['file_name']
            );
    
            $this->m_daftarkomunitas->updatekomunitas($id, $data);
            redirect('DaftarKomunitas');
        }
    }
    

    public function ShowDetailkomunitas($id) {
        $this->load->model('m_daftarkomunitas');
        $data['data'] = $this->m_daftarkomunitas->get_user_details($id);
        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/navAdmin');
        $this->load->view('admin/sidebarAdmin');
        $this->load->view('admin/komunitasUser/viewKomunitas', $data);
    }

    // public function tambah(){
    //     $this->form_validation->set_rules('nama_komunitas', 'Nama Komunitas DaftarKomunitas', 'required');
    //     $this->form_validation->set_rules('email_komunitas', 'Email Komunitas DaftarKomunitas', 'required');
    //     $this->form_validation->set_rules('password', 'Password DaftarKomunitas', 'required');
    //     $this->form_validation->set_rules('nomorTlp_komunitas', 'Nomor Telphone DaftarKomunitas', 'required');
    //     $this->form_validation->set_rules('penanggung_jawab', 'Penanggung Jawab DaftarKomunitas', 'required');
    //     $this->form_validation->set_rules('kategori_komunitas', 'Kategori DaftarKomunitas', 'required');
    //     $this->form_validation->set_rules('deskripsi_komunitas', 'Deskripsi DaftarKomunitas', 'required');
    //     $this->form_validation->set_rules('provinsi_komunitas', 'Provinsi DaftarKomunitas', 'required');
    //     $this->form_validation->set_rules('uploadFoto', 'Foto DaftarKomunitas', 'required');
    //     // $this->form_validation->set_rules('Approved', 'Institusi DaftarKomunitas', 'required');

    //     if ($this->form_validation->run() === FALSE) {
    //         // If validation fails, reload the view with validation errors
    //         echo '<script>alert("Data harus diisi");</script>';
    //         $this->load->view('admin/komunitasUser/daftarKomunitas.php');
    //     } else {
    //         $data = array(
    //             $nama_komunitas = $this->input->post('nama_komunitas'),
    //             $email_komunitas = $this->input->post('email_komunitas'),
    //             $password = $this->input->post('password'),
    //             $nomorTlp_komunitas = $this->input->post('nomorTlp_komunitas'),
    //             $penanggung_jawab = $this->input->post('penanggung_jawab'),
    //             $kategori_komunitas = $this->input->post('kategori_komunitas'),
    //             $deskripsi_komunitas = $this->input->post('deskripsi_komunitas'),
    //             $provinsi_komunitas = $this->input->post('provinsi_komunitas'),
    //             $uploadFoto = $this->input->post('uploadFoto'),
    //         );
    //         $this->m_daftarkomunitas->insertDataKomunitas($id, $nama_komunitas, $email_komunitas, $password, $nomorTlp_komunitas,$penanggung_jawab, $kategori_komunitas, $deskripsi_komunitas, $provinsi_komunitas, $uploadFoto);
    //         redirect('DaftarKomunitas/index');
    //     }
    // }
}
