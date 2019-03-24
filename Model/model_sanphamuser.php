<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_sanphamuser extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getSP_sql($user) // lấy về $user
	{
		$this->db->select('*'); // lấy tất cả
		$this->db->where('PRO_ACTIVE = 1');
		$this->db->where('USER_ID',$user); // lấy theo ID đang đăng nhập
		$data = $this->db->get('product'); // lấy từ table PRODUCT
		$data = $data->result_array(); 
		return $data;
	}
	public function getID($key)
	{
		// lấy id từ view so vào csdl
		$this->db->select('*');
		$this->db->where('PRO_ID', $key);
		$dataID = $this->db->get('detail_bill');
		$dataID = $dataID->result_array();
		//var_dump($dataID);

		return $dataID;
	}

	public function updateDH_sql($id,$billid,$ma,$ten,$gia,$sl,$user,$active)
	{
		$dulieusanpham = array(

			'DB_ID' => $id,
			'BILLDM_ID'=> $billid,
			'PRO_ID' => $ma,
			'PRO_NAME' => $ten,
			'PRO_PRICE' => $gia,
			'DB_SL' => $sl,
			'USER_ID' => $user,
			'BILL_ACTIVE' => $active, 	
		);

		$this->db->where('DB_ID', $id);
		return $this->db->update('detail_bill', $dulieusanpham);
	}



	public function getDH_sql($user)
	{
		$this->db->select('*');
		$this->db->where('BILL_ACTIVE = 0');
		$this->db->where('USER_ID',$user);
		$data = $this->db->get('detail_bill');
		$data = $data->result_array();
		return $data;
	}
	public function getDHchecked_sql($user,$key)
	{
		$this->db->select('*');
		$this->db->where('BILL_ACTIVE = 1');
		$this->db->where('USER_ID',$user);
		$this->db->where('BILLDM_ID', $key);
		$data = $this->db->get('detail_bill');
		$data = $data->result_array();
		return $data;
	}

	public function getbillchecked($user)
	{
		$this->db->select('*');
		$this->db->where('BILL_ACTIVE = 1');
		$this->db->where('USER_ID',$user);
		$data = $this->db->get('detail_bill');
		$data = $data->result_array();
		return $data;
	}



	public function getIDBILL($key)
	{
		// lấy id từ view so vào csdl
		$this->db->select('*');
		$this->db->where('BILLDM_ID', $key);
		$dataID = $this->db->get('bill_demo');
		$dataID = $dataID->result_array();
		//var_dump($dataID);

		return $dataID;
	}
	public function getchitietbill($key)
	{
		// lấy id từ view so vào csdl
		$this->db->select('*');
		$this->db->where('BILLDM_ID', $key);
		$dataID = $this->db->get('bill_demo');
		$dataID = $dataID->result_array();
		//var_dump($dataID);

		return $dataID;
	}

	public function getbilltheoid($idnhanduoc,$user)
	{
		// lấy id từ view so vào csdl
		$this->db->where('USER_ID',$user);
		$this->db->select('*');
		$this->db->where('BILL_ACTIVE = 0');
		$this->db->where('BILLDM_ID', $idnhanduoc);
		$dataID = $this->db->get('detail_bill');
		$dataID = $dataID->result_array();
		//var_dump($dataID);

		return $dataID;
	}
}