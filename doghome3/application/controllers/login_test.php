<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_test extends CI_Controller {

	public function index()
	{
		$this->load->view('login_test');
	}
}