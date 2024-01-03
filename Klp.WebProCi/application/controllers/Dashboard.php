<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_daftarkegiatan');
		$this->load->library('form_validation');
		$this->load->model('m_komunitas');
		$this->load->model('m_logIn');
		$this->load->library('session');

	}

	function __construct(){
        parent::__construct();
        $this->load->model('m_daftarkegiatan');
        $this->load->library('form_validation');

    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		$data['kegiatan'] = $this->m_daftarkegiatan->tampilData();
		$data['users'] = $this->m_daftarkegiatan->getDataWithKomunitasName();
		$this->load->view('page/relawan', $data);

	}

	public function detail($id)
	{
		$user_id = $this->session->userdata('user_id');
		$data['kegiatan'] = $this->m_daftarkegiatan->getKegiatanById($id);
		// $data['user'] = $this->m_komunitas->getUserById($user_id);
		if ($data['kegiatan']) {
			$this->load->view('komunitas/detailKegiatan', $data);
		} else {
			// Kegiatan tidak ditemukan, arahkan kembali atau tampilkan pesan kesalahan
			redirect('DashboardKomunitas');
		}
	}
}
