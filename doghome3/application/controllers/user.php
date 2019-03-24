<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function dashboard()
	{
		if($this->session->userdata('is_logged_in') and $this->session->userdata('level') == 'user'){
			$this->load->view('home_user');
		}elseif($this->session->userdata('is_logged_in') and $this->session->userdata('level') == 'admin'){
			redirect('home');
		}else{
			$error['error'] = 'Bạn chưa đủ quyền truy cập';
			$this->load->view('login_form',$error);
		}
		
	}

}