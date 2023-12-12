<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CariKegiatan extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('m_daftarkegiatan');
        $this->load->library('form_validation');

    }

	public function index()
	{
		$data['kegiatan'] = $this->m_daftarkegiatan->tampilData();
		$this->load->view('page/cariKegiatan', $data);

	}
}
