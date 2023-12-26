<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_daftarkegiatan');
        $this->load->library('form_validation');

    }

    public function tambah() {
        $this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan', 'required');
        $this->form_validation->set_rules('aktivitas_kegiatan', 'Aktivitas Kegiatan', 'required');
        $this->form_validation->set_rules('tanggal_kegiatan', 'Tanggal Kegiatan', 'required');
        $this->form_validation->set_rules('lokasi_kegiatan', 'Lokasi Kegiatan', 'required');
        $this->form_validation->set_rules('deskripsi_kegiatan', 'Deskripsi Kegiatan', 'required');

        if ($this->form_validation->run() === FALSE) {
            // If validation fails, reload the view with validation errors
            echo '<script>alert("Data harus diisi");</script>';
            $this->load->view('komunitas/daftarKegiatan.php');
        } else {
            $config['upload_path'] = 'uploads/';  // Sesuaikan dengan folder tempat menyimpan file
            $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf'; // Sesuaikan dengan tipe file yang diizinkan
            $config['max_size'] = 10000;  // Sesuaikan dengan ukuran maksimal file

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('fileUpload')) {
                // Jika upload file gagal, tampilkan pesan error
                $error = array('error' => $this->upload->display_errors());
                print_r($error); // Display the error messages for debugging
                $this->load->view('komunitas/daftarKegiatan.php', $error);
            } else {
                // Jika upload file berhasil, dapatkan data file
                $upload_data = $this->upload->data();
                $data = array(
                'nama_kegiatan' => $this->input->post('nama_kegiatan'),
                'aktivitas_kegiatan' => $this->input->post('aktivitas_kegiatan'),
                'tanggal_kegiatan' => $this->input->post('tanggal_kegiatan'),
                // 'batas_daftar' => $this->input->post('batas_daftar'),
                'lokasi_kegiatan' => $this->input->post('lokasi_kegiatan'),
                'penanggung_jawab' => $this->input->post('penanggung_jawab'),
                'kategori' => $this->input->post('kategori'),
                'provinsi' => $this->input->post('provinsi'),
                'deskripsi_kegiatan'=> $this->input->post('deskripsi_kegiatan'),
                'ketentuan'=> $this->input->post('ketentuan'),
                'uploadFile' => $upload_data['file_name']  // Nama file yang diunggah
                );

                // Simpan data ke database
                $this->m_daftarkegiatan->insertData($data);

                // Arahkan kembali ke halaman index
                redirect('Kegiatan');
            }
        }
    }
    
    public function index() {

        $data['kegiatan'] = $this->m_daftarkegiatan->tampilData();
		$this->load->view('komunitas/previewkegiatan',$data);
    }

    public function edit($id) {
        $data['kegiatan'] = $this->m_daftarkegiatan->getKegiatanById($id);
        if ($data['kegiatan']) {
            $this->load->view('komunitas/editKegiatan', $data);
        } else {
            // Kegiatan tidak ditemukan, arahkan kembali atau tampilkan pesan kesalahan
            redirect('Kegiatan');
        }
    }
    
    public function update($id) {
            // Ambil data dari form
            $config['upload_path'] = 'uploads/';  // Sesuaikan dengan folder tempat menyimpan file
            $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf'; // Sesuaikan dengan tipe file yang diizinkan
            $config['max_size'] = 10000;  // Sesuaikan dengan ukuran maksimal file

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // if (!$this->upload->do_upload('fileUpload')) {
            //     // Jika upload file gagal, tampilkan pesan error
            //     $error = array('error' => $this->upload->display_errors());
            //     print_r($error); // Display the error messages for debugging
            //     $this->load->view('komunitas/editdaftarKegiatan.php', $error);
            // } else {
                // Jika upload file berhasil, dapatkan data file
                $upload_data = $this->upload->data();
                    $nama_kegiatan = $this->input->post('nama_kegiatan');
                    $aktivitas_kegiatan = $this->input->post('aktivitas_kegiatan');
                    $tanggal_kegiatan = $this->input->post('tanggal_kegiatan');
                    $batas_daftar = $this->input->post('batas_daftar');
                    $lokasi_kegiatan = $this->input->post('lokasi_kegiatan');
                    $penanggung_jawab = $this->input->post('penanggung_jawab');
                    $kategori_kegiatan = $this->input->post('kategori');
                    $provinsi = $this->input->post('provinsi');
                    $deskripsi_kegiatan = $this->input->post('deskripsi_kegiatan');
                    $ketentuan = $this->input->post('ketentuan');
                    $uploadFile = $upload_data['file_name'] ;
            // }
        
            // Simpan perubahan ke database
            $this->m_daftarkegiatan->updateKegiatan($id, $nama_kegiatan, $aktivitas_kegiatan,$tanggal_kegiatan, $batas_daftar, $lokasi_kegiatan, $penanggung_jawab,$kategori_kegiatan, $provinsi ,$deskripsi_kegiatan,$ketentuan, $uploadFile);
        
            // Arahkan kembali ke halaman daftar kegiatan
            redirect('Kegiatan');
    }

    public function detailkeg($id) {
       
        $data['kegiatan'] = $this->m_daftarkegiatan->getKegiatanById($id);
        if ($data['kegiatan']) {
            $this->load->view('komunitas/detailFormKeg', $data);
        } else {
            // Kegiatan tidak ditemukan, arahkan kembali atau tampilkan pesan kesalahan
            redirect('Kegiatan');
        }
    }

    public function hapus($id) {
        if ($this->m_daftarkegiatan->hapusKegiatan($id)) {
            // Kegiatan berhasil dihapus, arahkan kembali atau tampilkan pesan sukses
            redirect('Kegiatan');
        } else {
            // Kegiatan tidak ditemukan, arahkan kembali atau tampilkan pesan kesalahan
            redirect('Kegiatan');
        }
    }
    
    
}
