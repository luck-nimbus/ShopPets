<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function dashboard()
	{
		if($this->session->userdata('is_logged_in') and $this->session->userdata('level') == 'admin'){
			$this->load->view('home');
		}elseif($this->session->userdata('is_logged_in') and $this->session->userdata('level') == 'user'){
			redirect('home_user');
		}else{
			$error['error'] = 'Bạn chưa đủ quyền truy cập';
			$this->load->view('login_form',$error);
		}
		
	}

}