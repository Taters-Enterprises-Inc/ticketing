<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user');
	}

	public function index()
	{
		$this->load->view('login/includes/opening_tag');
		$this->load->view('login_form');
		$this->load->view('login/includes/closing_tag');
	}

	public function validate()
	{
		$data = $this->user->login();

		$userId = $data['id'];
		$firstName = $data['first_name'];
		$lastName = $data['last_name'];
		$fullName = $firstName . " " . $lastName;

		$departmentId = $data['department_id'];

		$session_data = array(
			'department_id' => $departmentId,
			'user_id' => $userId,
			'first_name' => $firstName,
			'full_name' => $fullName,
		);
		
		$this->session->set_userdata($session_data);
		redirect(base_url() . 'dashboard');
	}
}