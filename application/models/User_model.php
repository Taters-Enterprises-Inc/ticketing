<?php
class User_model extends CI_Model{

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('url');
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$query = $this->db->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
		return $query->row_array();
	}
}
?>