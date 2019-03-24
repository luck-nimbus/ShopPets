<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class insertTV extends CI_Controller {

	
	public function index()
	{
		$this->load->view('add_thanhvien');
	}
}