<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sanpham_home extends CI_Controller {

	
	public function index()
	{
		$this->load->model('model_sanphamhome');
		$mang = $this->model_sanphamhome->getSP_sql();
		$mang = array('mang' => $mang);


		$this->load->view('login2',$mang);
	}
	
	public function detailSP($id)
	{
		$this->load->model('model_sanphamhome');
		$ketquaid = $this->model_sanphamhome->getSP_detail($id);
		$ketquaid = array('ketquaid' => $ketquaid);

		//đưa dữ liệu và view
		$this->load->view('sanpham_detail', $ketquaid, FALSE);
	}

	// public function detailSP($idnhanduoc)
	// {
	// 	$this->load->model('model_sanphamcheck');
	// 	$ketquaid = $this->model_sanphamcheck->getID($idnhanduoc);
	// 	$ketquaid = array('ketqua_id' => $ketquaid);

	// 	//đưa dữ liệu và view
	// 	$this->load->view('check_sanpham', $ketquaid, FALSE);
	// }
}
?>