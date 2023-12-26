<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarBerita extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('m_daftarberita');
        $this->load->library('form_validation');
    }

	public function index() {
        $data['data'] = $this->m_daftarberita->tampilBerita();
        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/navAdmin');
        $this->load->view('admin/sidebarAdmin');
        $this->load->view('admin/berita/daftarBerita', $data);
        $this->load->view('admin/footerAdmin');
    }

	public function hapusberita($id) {
        if ($this->m_daftarberita->delete_berita($id)) {
            redirect('DaftarBerita/index');
        } else {
            redirect('DaftarBerita/index');
        }
    }

	public function editberita($id){
        $data['data'] = $this->m_daftarberita->getUserById($id);
        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/navAdmin');
        $this->load->view('admin/sidebarAdmin');
        $this->load->view('admin/berita/editBerita', $data);
    }

	public function update($id) {
        $config['upload_path'] = 'uploads/avatarBerita';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
        $config['max_size'] = 10000;
    
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
    
        if (!$this->upload->do_upload('gambar_berita')) {
            $upload_data = $this->upload->data();
            $data = array(
                'nama_berita' => $this->input->post('nama_berita'),
                'tanggal_berita' => $this->input->post('tanggal_berita'),
                'isi_berita' => $this->input->post('isi_berita'),
            );
            $this->m_daftarberita->updateberita($id, $data);
            redirect('DaftarBerita');
        } else {
            $upload_data = $this->upload->data();
            $data = array(
                'nama_berita' => $this->input->post('nama_berita'),
                'tanggal_berita' => $this->input->post('tanggal_berita'),
                'isi_berita' => $this->input->post('isi_berita'),
                'gambar_berita' => $upload_data['file_name']
            );
    
            $this->m_daftarberita->updateberita($id, $data);
            redirect('DaftarBerita');
        }
    }    

    public function tambahHalamanBerita() {
        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/navAdmin');
        $this->load->view('admin/sidebarAdmin');
        $this->load->view('admin/berita/tambahBerita');
        $this->load->view('admin/footerAdmin');
    }


    public function tambahberita() {
        $config['upload_path'] = 'uploads/avatarBerita';  // Sesuaikan dengan folder tempat menyimpan file
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf'; // Sesuaikan dengan tipe file yang diizinkan
        $config['max_size'] = 10000;  // Sesuaikan dengan ukuran maksimal file
  
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
  
        if (!$this->upload->do_upload('gambar_berita')) {
            // Jika upload file berhasil, dapatkan data file
            $upload_data = $this->upload->data();
            $data = array(
            'nama_berita' => $this->input->post('nama_berita'),
            'tanggal_berita' => $this->input->post('tanggal_berita'),
            'isi_berita' => $this->input->post('isi_berita'),
            'gambar_berita' => $upload_data['file_name']
            );
            $this->m_daftarberita->insertData($data);
            redirect('DaftarBerita/index');
        } else {
            // Jika upload file berhasil, dapatkan data file
            $upload_data = $this->upload->data();
            $data = array(
            'nama_berita' => $this->input->post('nama_berita'),
            'tanggal_berita' => $this->input->post('tanggal_berita'),
            'isi_berita' => $this->input->post('isi_berita'),
            'gambar_berita' => $upload_data['file_name']  // Nama file yang diunggah
            );
            $this->m_daftarberita->insertData($data);
            redirect('DaftarBerita/index');
        }
    }
    
}


// // Jika upload file gagal, tampilkan pesan error
// $error = array('error' => $this->upload->display_errors());
// print_r($error); // Display the error messages for debugging
