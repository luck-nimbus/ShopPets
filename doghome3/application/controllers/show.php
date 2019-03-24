<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show extends CI_Controller {

	
	public function index()
	{
		$this->load->model('model_sanpham');
		$mang = $this->model_sanpham->getSP_sql();
		$mang = array('mang' => $mang);


		$this->load->view('show',$mang);
    }
    
}    
?>