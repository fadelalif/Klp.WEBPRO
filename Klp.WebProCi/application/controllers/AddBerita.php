<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddBerita extends CI_Controller {
    public function index() {
		$this->load->view('Page/addBerita');
    }

    public function addBerita($judul_berita, $isi_berita, $gambar_berita, $tanggal_berita){
        $koneksi = new mysqli("localhost", "username", "password", "nama_database");
    
        if ($koneksi->connect_error) {
            die("Koneksi database gagal: " . $koneksi->connect_error);
        }
    
        $judul_berita = $koneksi->real_escape_string($judul_berita);
        $isi_berita = $koneksi->real_escape_string($isi_berita);
        $gambar_berita = $koneksi->real_escape_string($gambar_berita);
        $tanggal_berita = $koneksi->real_escape_string($tanggal_berita);
    
        $query = "INSERT INTO nama_tabel (judul_berita, isi_berita, gambar_berita, tanggal_berita) VALUES ('$judul_berita', '$isi_berita', '$gambar_berita', '$tanggal_berita')";
    
        if ($koneksi->query($query) === TRUE) {
            echo "Berita berhasil ditambahkan";
        } else {
            echo "Error: " . $query . "<br>" . $koneksi->error;
        }
    
        $koneksi->close();
    }
    
}
