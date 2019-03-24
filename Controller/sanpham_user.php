<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sanpham_user extends CI_Controller {

	
	public function index() 
	{
		//$user =$this->session->id;
		$user =$this->session->userdata('id'); // lấy id theo session cho vào biến
		$this->load->model('model_sanphamuser'); // gọi model
		$datasp = $this->model_sanphamuser->getSP_sql($user); // gọi hàm kèm $user
		$datasp = array('mangsp' => $datasp); // gọi mảng


		$this->load->view('sanpham_user',$datasp); // đẩy ra view
	}

	public function editSP($idnhanduoc)
	{
		$user =$this->session->userdata('id');
		$this->load->model('model_sanphamuser');
		$ketquaid = $this->model_sanphamuser->getbilltheoid($idnhanduoc,$user);
		$ketquaid = array('ketqua_id' => $ketquaid);

		//đưa dữ liệu và view
		$this->load->view('edit_bill', $ketquaid, FALSE);
	}
	public function updateSP()
	{	
		$id = $this->input->post('id_sanpham');
		$billid = $this->input->post('billid_sanpham');
		$ma = $this->input->post('ma_sanpham');
		$ten = $this->input->post('ten_sanpham');
		$gia = $this->input->post('gia_sanpham');
		$sl = $this->input->post('sl_sanpham');
		$user = $this->input->post('user_sanpham');
		$active = $this->input->post('active_sanpham');
		$this->load->model('model_sanphamuser');
		if($this->model_sanphamuser->updateDH_sql($id,$billid,$ma,$ten,$gia,$sl,$user,$active))
		{
			$this->load->view('success_view');
		}
		else
		{
			echo "UPDATE THẤT BẠI";
		}
	}

	public function donhang()
	{
		$user =$this->session->userdata('id'); // lấy id theo session cho vào biến
		$this->load->model('model_sanphamuser'); // gọi model
		$databill = $this->model_sanphamuser->getDH_sql($user); // gọi hàm kèm $user
		$databill = array('mangsp' => $databill); // gọi mảng


		$this->load->view('donhang',$databill);
	}


	public function chitiet($key)
	{
		 // lấy id theo session cho vào biến
		$this->load->model('model_sanphamuser'); // gọi model
		$databill = $this->model_sanphamuser->getIDBILL($key); // gọi hàm kèm $user
		$databill = array('mangsp' => $databill); // gọi mảng


		$this->load->view('chitietbill',$databill);
	}


	public function checked_bill()
	{
		$user =$this->session->userdata('id'); // lấy id theo session cho vào biến
		$this->load->model('model_sanphamuser'); // gọi model
		$databill = $this->model_sanphamuser->getbillchecked($user); // gọi hàm kèm $user
		$databill = array('mangsp' => $databill); // gọi mảng


		$this->load->view('checked',$databill);
	}


	public function donhang_checked($key)
	{
		$user =$this->session->userdata('id'); // lấy id theo session cho vào biến
		$this->load->model('model_sanphamuser'); // gọi model
		$databill = $this->model_sanphamuser->getDHchecked_sql($user,$key); // gọi hàm kèm $user
		$databill = array('mangsp' => $databill); // gọi mảng


		$this->load->view('donhang_checked',$databill);
	}
}