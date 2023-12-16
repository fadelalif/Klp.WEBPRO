<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DbRelawan extends CI_Controller {

	 public function __construct()
	 {
		parent::__construct();
		$this->load->model('M_dbrelawan');
	 }
	public function index()
	{
		
		$allRelawan = $this->M_dbrelawan->getData();
		$Data = array('relawan'=>$allRelawan);	

		$this->load->view('komunitas/dbRelawan', $Data);
	}
	public function insert()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_tlp = $this->input->post('no_tlp');
		$alasan = $this->input->post('alasan');
		$pengalaman = $this->input->post('alasan');
		
		$arrInsert = array(
			'nama' => $nama,
			'email' => $email,
			'no_tlp'=> $no_tlp,
			'alasan'=> $alasan,
			'pengalaman' => $pengalaman
		);
		
		$this->M_dbrelawan->insertData($arrInsert);
		redirect('/dbRelawan');
	}
}
