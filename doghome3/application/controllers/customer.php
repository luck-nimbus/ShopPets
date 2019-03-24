<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function dashboard()
	{
		if($this->session->userdata('is_logged_in') and $this->session->userdata('level') == 'admin'){
			$this->load->view('home');
		}elseif($this->session->userdata('is_logged_in') and $this->session->userdata('level') == 'user'){
			redirect('user/dashboard');
		}else{
			echo 'Chào người dùng - đây là tài khoản khách hàng hoặc tài khoản hiện tạm khóa';
			echo '<br/>';
			echo 'Vui lòng dùng tài khoản đủ quyền hạn để tham gia hoặc liên hệ với ban quản trị';
		}
		
	}

}