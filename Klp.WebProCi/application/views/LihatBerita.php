<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LihatBerita extends CI_Controller
{

    function construct()
    {
        parent::construct();
        $this->load->model('m_news');
    }
    public function index()
    {

        $id_berita = $this->input->get('id');

        $data['berita'] = $this->m_news->getNewsById($id_berita);

        $this->load->view('page/lihatBerita', $data);
    }
}
