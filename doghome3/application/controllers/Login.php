<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$error['error'] = '';
		// logged by admin
		if($this->session->userdata('is_logged_in') and $this->session->userdata('level') == 'admin'){
			redirect('admin/dashboard');
		//logged by user
		}elseif($this->session->userdata('is_logged_in') and $this->session->userdata('level') == 'user'){
			redirect('user/dashboard');
		//didn't logged
		}else{
			$this->load->view('login2',$error);
		}
		
		
	}
	function phpAlert($msg) {
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
	}
	public function log()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','trim|callback_check_user_login');
		$this->form_validation->set_rules('password','Password','trim|md5');

		//not complete in the textbox in form
		if($this->form_validation->run() == false){

			redirect('');
			
		//complete textbox in form
		}else{
			//level is admin
			if($this->session->userdata('level') == 'user')
			{
				redirect ('user/dashboard');
			//level is member
			}elseif($this->session->userdata('level') == 'admin'){
				redirect ('admin/dashboard');
			}elseif($this->session->userdata('level') == 'customer'){
				redirect ('customer/dashboard');
			}
		}
	}

	public function check_user_login() // controller/Login/check_user_login
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('model_user');
		$result =  $this->model_user->is_logged_in($username,$password);
		//correct username and password
		if($result){
			foreach ($result as $user) {
				$s = array();
				$s['is_logged_in']			= 1;
				$s['id']		= $user->USER_ID;
				$s['username']	= $user->USER_USERNAME;
				$s['password'] 	= $user->USER_PASSWORD;
				$s['level'] 	= $user->USER_LEVEL;
				$s['name']		= $user->USER_NAME;
				$s['email']		= $user->USER_EMAIL;
				$s['phone']		= $user->USER_PHONE;
				$this->session->set_userdata($s); // lấy giá trị vào session_userdata
			}
		// incorrect
		}else{
			$this->form_validation->set_message('check_user_login','Sai tài khoản hoặc mật khẩu');
			return false;	
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('');
	}
}
