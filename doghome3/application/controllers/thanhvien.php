<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thanhvien extends CI_Controller {

	
	public function index()
	{
		$this->load->model('model_thanhvien');
		$datatv = $this->model_thanhvien->getTV_sql();
		$datatv = array('datatv' => $datatv);


		$this->load->view('thanhvien',$datatv);
	}
	public function insertTV()
	{		
		$username = $this->input->post('username');	
		$password = $this->input->post('password');	
		$level = $this->input->post('level');
		$ten = $this->input->post('ten');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');

		$this->load->model('model_thanhvien');
		$status = $this->model_thanhvien->insertTV_sql($username,$password,$level,$ten,$email,$phone);
		if($status)
		{
			$this->load->view('success_view');
		}
		else
		{
			echo "Thất Bại";
		}
	}
	public function editTV($idnhanduoc)
	{
		$this->load->model('model_thanhvien');
		$ketquaid = $this->model_thanhvien->getID($idnhanduoc);
		$ketquaid = array('ketqua_id' => $ketquaid);

		//đưa dữ liệu và view
		$this->load->view('edit_thanhvien', $ketquaid, FALSE);
	}

	public function updateTV()
	{	
		$id = $this->input->post('id');
		$username = $this->input->post('username');	
		$password = $this->input->post('password');	
		$level = $this->input->post('level');
		$ten = $this->input->post('ten');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');

		$this->load->model('model_thanhvien');
		if($this->model_thanhvien->updateTV_sql($id,$username,$password,$level,$ten,$email,$phone))
		{
			$this->load->view('success_view');
		}
		else
		{
			echo "UPDATE THẤT BẠI";
		}
	}
}