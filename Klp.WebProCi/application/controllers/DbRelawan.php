<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DbRelawan extends CI_Controller {

	 public function __construct()
	 {
		parent::__construct();
		$this->load->database();
		$this->load->model('m_daftarkegiatan');
		$this->load->model("M_dbrelawan");
	 }
	 
	 public function index()
	 {
		$data['relawan'] = $this->M_dbrelawan->getData();
		 
		$this->load->view('komunitas/dbRelawan', $data);
	 }
	 
	public function insert()
	{
		// Ambil data dari form
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
			//$upload_data = $this->upload->data();
		}
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_tlp = $this->input->post('no_tlp');
		$alasan = $this->input->post('alasan');
		$pengalaman = $this->input->post('pengalaman');
		//$cv = $this->input->post('cv');

		$arrInsert = array(
			'nama' => $nama,
			'email' => $email,
			'no_tlp'=> $no_tlp,
			'alasan'=> $alasan,
			'pengalaman' => $pengalaman,
			//'cv'=>$cv
		);
			
		$this->M_dbrelawan->insertData($arrInsert);
		redirect('/DbRelawan');
	}
}
