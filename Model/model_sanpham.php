<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_sanpham extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}


	public function insertSP_sql($iduser,$loai,$ten,$gia,$mota,$sl,$avatar)
	{
		$dulieusanpham = array(
			'USER_ID' =>$iduser,
			'CAT_ID' => $loai,
			'PRO_NAME' => $ten,
			'PRO_PRICE' => $gia,
			'PRO_DESCRIPTION' => $mota,
			'PRO_QUATITY' =>$sl,
			'PRO_AVA' => $avatar, 	
		);

		$this->db->insert('product', $dulieusanpham);
		return $this->db->insert_id();
	}

	public function getSP_sql()
	{
		$this->db->select('*');

		$this->db->where('PRO_ACTIVE = 1');
		$this->db->ORDER_BY('PRO_ID DESC');
		$data = $this->db->get('product');
		$data = $data->result_array();
		return $data;
	}
	public function getloai_sql()
	{
		$this->db->select('*');
		$data = $this->db->get('category');
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

	
	public function updateSP_sql($id,$loai,$ten,$gia,$mota,$sl,$avatar)
	{
		$dulieusanpham = array(

			'PRO_ID' => $id,
			'CAT_ID' => $loai,
			'PRO_NAME' => $ten,
			'PRO_PRICE' => $gia,
			'PRO_DESCRIPTION' => $mota,
			'PRO_QUATITY' =>$sl,
			'PRO_AVA' => $avatar, 	
		);

		$this->db->where('PRO_ID', $id);
		return $this->db->update('product', $dulieusanpham);
	}


	public function deleteSP_sql($id)
	{
		$this->db->where('PRO_ID', $id);
		return $this->db->delete('product');
	}
	public function getdhadmin_sql()
	{
		$this->db->select('*');
		$this->db->ORDER_BY('BILLDM_ID DESC');
		$data = $this->db->get('bill_demo');
		$data = $data->result_array();
		return $data;
	}
	public function getdhchitietadmin_sql()
	{
		$this->db->select('*');
		$this->db->ORDER_BY('BILLDM_ID DESC');
		$data = $this->db->get('detail_bill');
		$data = $data->result_array();
		return $data;
	}
}