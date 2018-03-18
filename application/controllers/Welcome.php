<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$results = $this->db->get('users');
		$users = $results->result();
		print_r($users);
		die();
		$this->load->view('welcome_message');
	}
}
