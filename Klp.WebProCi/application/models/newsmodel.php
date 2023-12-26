<?php

class newsmodel extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database(); // Memuat library database
	}
	public function getNewsById($news_id)
	{
		// Fetch a single news item by ID from the database
		$query = $this->db->get_where('berita_konten', array('id' => $news_id));

		// Return the result as an array
		return $query->row_array();
	}
		
	public function getNews($sort = 'default')
	{
		if ($sort === 'asc') {
			$this->db->order_by('tanggal_berita', 'ASC');
		} elseif ($sort === 'desc') {
			$this->db->order_by('tanggal_berita', 'DESC');
		} else {
			// Default sorting or handle other sorting options
		}

		$query = $this->db->get('berita_konten');
		return $query->result_array();
	}

	}