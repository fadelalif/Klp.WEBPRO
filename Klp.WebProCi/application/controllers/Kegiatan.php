<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_daftarkegiatan');

    }

    public function tambah() {
        $data = array(
            'nama_kegiatan' => $this->input->post('nama_kegiatan'),
            'judul_kegiatan' => $this->input->post('judul_kegiatan'),
            'tanggal_kegiatan' => $this->input->post('tgl_kegiatan'),
            'lokasi_kegiatan' => $this->input->post('lokasi_kegiatan'),
            'penanggung_jawab' => $this->input->post('penanggung_jawab'),
            'kategori_kegiatan' => $this->input->post('kategori'),
            'provinsi' => $this->input->post('provinsi'),
            'deskripsi_kegiatan'=> $this->input->post('deskripsi_kegiatan'),
            // 'agreement' => $this->input->post('agreement')
        );

        $this->m_daftarkegiatan->insertData($data);

        redirect('Kegiatan'); // Mengarahkan kembali ke halaman index
    }
    
    public function index() {

        $data['kegiatan'] = $this->m_daftarkegiatan->tampilData();
		$this->load->view('komunitas/previewkegiatan',$data);
    }

    public function edit($nama_kegiatan) {
        $data['kegiatan'] = $this->m_daftarkegiatan->getKegiatanByNama($nama_kegiatan);
        if ($data['kegiatan']) {
            $this->load->view('komunitas/editdaftarKegiatan', $data);
        } else {
            // Kegiatan tidak ditemukan, arahkan kembali atau tampilkan pesan kesalahan
            redirect('Kegiatan');
        }
    }
    
    public function update() {
        // Ambil data dari form
        $nama_kegiatan = $this->input->post('nama_kegiatan');
        $judul_kegiatan = $this->input->post('judul_kegiatan');
        $tanggal_kegiatan = $this->input->post('tgl_kegiatan');
        $lokasi_kegiatan = $this->input->post('lokasi_kegiatan');
        $penanggung_jawab = $this->input->post('penanggung_jawab');
        $kategori_kegiatan = $this->input->post('kategori');
        $provinsi = $this->input->post('provinsi');
        $deskripsi_kegiatan = $this->input->post('deskripsi_kegiatan');
    
    
        // Simpan perubahan ke database
        $this->m_daftarkegiatan->updateKegiatan($nama_kegiatan, $judul_kegiatan,$tanggal_kegiatan, $lokasi_kegiatan, $penanggung_jawab,$kategori_kegiatan, $provinsi, $deskripsi_kegiatan);
    
        // Arahkan kembali ke halaman daftar kegiatan
        redirect('Kegiatan');
    }

    public function hapus($nama_kegiatan) {
        if ($this->m_daftarkegiatan->hapusKegiatan($nama_kegiatan)) {
            // Kegiatan berhasil dihapus, arahkan kembali atau tampilkan pesan sukses
            redirect('Kegiatan');
        } else {
            // Kegiatan tidak ditemukan, arahkan kembali atau tampilkan pesan kesalahan
            redirect('Kegiatan');
        }
    }
    
    
}
