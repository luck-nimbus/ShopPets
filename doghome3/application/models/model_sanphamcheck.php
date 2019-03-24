<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_sanphamcheck extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getSP_sql()
	{
		$this->db->select('*');
		$this->db->where('PRO_ACTIVE = 0');
		$data = $this->db->get('product');
		$data = $data->result_array();
		return $data;
	}
	public function getID($key)
	{
		// lấy id từ view so vào csdl
		$this->db->select('*');
		$this->db->where('PRO_ID', $key);
		$dataID = $this->db->get('product');
		$dataID = $dataID->result_array();
		//var_dump($dataID);

		return $dataID;
	}

	
	public function updateSP_sql($id,$loai,$ten,$gia,$mota,$sl,$avatar,$active)
	{
		$dulieusanpham = array(

			'PRO_ID' => $id,
			'CAT_ID' => $loai,
			'PRO_NAME' => $ten,
			'PRO_PRICE' => $gia,
			'PRO_DESCRIPTION' => $mota,
			'PRO_QUATITY' =>$sl,
			'PRO_AVA' => $avatar, 	
			'PRO_ACTIVE' =>$active
		);

		$this->db->where('PRO_ID', $id);
		return $this->db->update('product', $dulieusanpham);
	}

}