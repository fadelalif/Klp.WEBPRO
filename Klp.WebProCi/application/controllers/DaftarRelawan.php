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
        $this->load->view('admin/footerAdmin');
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
        $config['upload_path'] = 'uploads/avatarBerita';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
        $config['max_size'] = 10000;
        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if (!$this->upload->do_upload('uploadFoto')) {
            $upload_data = $this->upload->data();
            $data = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'nmrTelphone' => $this->input->post('nmrTelphone'),
                'tgl_lahir'=> $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'institusi' => $this->input->post('institusi'),
                'provinsi' => $this->input->post('provinsi'),
                'uploadFoto' => $upload_data['file_name']
            );
        
            $this->m_daftarrelawan->updaterelawan($id, $data);
            redirect('DaftarRelawan');
        } else {
            $upload_data = $this->upload->data();
            $data = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'nmrTelphone' => $this->input->post('nmrTelphone'),
                'tgl_lahir'=> $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'institusi' => $this->input->post('institusi'),
                'provinsi' => $this->input->post('provinsi'),
                'uploadFoto' => $upload_data['file_name']
            );
        
            $this->m_daftarrelawan->updaterelawan($id, $data);
            redirect('DaftarRelawan');
        }
    }


    public function tambah() {

    
        $config['upload_path'] = 'uploads/avatarKom';  // Sesuaikan dengan folder tempat menyimpan file
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf'; // Sesuaikan dengan tipe file yang diizinkan
        $config['max_size'] = 10000;  // Sesuaikan dengan ukuran maksimal file
    
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
    
        if (!$this->upload->do_upload('uploadFoto')) {
            // Jika upload file berhasil, dapatkan data file
            $upload_data = $this->upload->data();
            $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'nmrTelphone' => $this->input->post('nmrTelphone'),
            'tgl_lahir'=> $this->input->post('tgl_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'institusi' => $this->input->post('institusi'),
            'provinsi' => $this->input->post('provinsi')
            );
    
            // Simpan data ke database
            $this->m_daftarrelawan->insertData($data);
    
            // Arahkan kembali ke halaman index
            redirect('DaftarRelawan/index');
        } else {
            // Jika upload file berhasil, dapatkan data file
            $upload_data = $this->upload->data();
            $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'nmrTelphone' => $this->input->post('nmrTelphone'),
            'tgl_lahir'=> $this->input->post('tgl_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'institusi' => $this->input->post('institusi'),
            'provinsi' => $this->input->post('provinsi'),
            'uploadFoto' => $upload_data['file_name']  // Nama file yang diunggah
            );
            $this->m_daftarrelawan->insertData($data);
            redirect('DaftarRelawan/index');
        }
    }


    public function view(){
        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/navAdmin');
        $this->load->view('admin/sidebarAdmin');
        $this->load->view('admin/relawanUser/viewUser');
    }


    public function ShowDetail($id) {
        $data['data'] = $this->m_daftarrelawan->get_user_details($id);
        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/navAdmin');
        $this->load->view('admin/sidebarAdmin');
        $this->load->view('admin/relawanUser/viewUser', $data);
    }
}






