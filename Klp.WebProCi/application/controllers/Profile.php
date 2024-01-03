<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Load model dan library yang diperlukan
		$this->load->model('m_profile');
		$this->load->library('form_validation');
		$this->load->library('session');
		
	}

	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		$data['user_profile'] = $this->m_profile->getUserProfile($user_id);
		$this->load->view('page/profile', $data);
	}

	public function updateProfile()
	{
		// Handle logika update profil di sini
		// Ambil data dari form
		$data = array(
			'firstname' => $this->input->post('firstname'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'institusi' => $this->input->post('institusi'),
			'provinsi' => $this->input->post('provinsi'),
			// ... tambahkan field lain sesuai kebutuhan
		);

		// Panggil model untuk update data
		$this->m_profile->updateProfile($user_id, $data);

		// Redirect ke halaman profil atau tampilkan pesan sukses
		redirect('Profile');
	}
}
		$user_id = $this->session->userdata('user_id');
		$data['user_profile'] = $this->m_profile->getUserProfile($user_id);
		$this->load->view('profile', $data);
	}

	public function updateProfile()
	{
		// Handle logika update profil di sini
		// Ambil data dari form
		$data = array(
			'firstname' => $this->input->post('firstname'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'institusi' => $this->input->post('institusi'),
			'provinsi' => $this->input->post('provinsi'),
			// ... tambahkan field lain sesuai kebutuhan
		);

		// Panggil model untuk update data
		$this->m_profile->updateProfile($user_id, $data);

		// Redirect ke halaman profil atau tampilkan pesan sukses
		redirect('Profile');
	}
}