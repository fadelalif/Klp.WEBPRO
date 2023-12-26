<?php

class newsmodel extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database(); // Memuat library database
	}
	public function getNews()
	{
		$query = $this->db->get('berita');

		return $query->result_array();
	}
	public function getNewsById($news_id)
	{
		// Fetch a single news item by ID from the database
		$query = $this->db->get_where('berita', array('id' => $news_id));

		// Return the result as an array
		return $query->row_array();
	}
}