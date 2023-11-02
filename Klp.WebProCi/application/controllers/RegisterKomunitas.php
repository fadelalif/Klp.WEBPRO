<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterKomunitas extends CI_Controller {
    public function index() {
		$this->load->view('page/registerKom');
    }
}
