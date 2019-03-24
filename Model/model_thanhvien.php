<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_thanhvien extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getTV_sql()
	{
		$this->db->select('*');
		$data = $this->db->get('users');
		$data = $data->result_array();
		return $data;
	}
	public function insertTV_sql($username,$password,$level,$ten,$email,$phone)
	{
		$dulieuthanhvien = array(
			'USER_USERNAME' => $username,
			'USER_PASSWORD' => md5($password),
			'USER_LEVEL' => $level,
			'USER_NAME' => $ten,
			'USER_EMAIL' =>$email,
			'USER_PHONE' => $phone, 	
		);

		$this->db->insert('users', $dulieuthanhvien);
		return $this->db->insert_id();
	}
	public function getID($key)
	{
		// lấy id từ view so vào csdl
		$this->db->select('*');
		$this->db->where('USER_ID', $key);
		$dataID = $this->db->get('users');
		$dataID = $dataID->result_array();
		//var_dump($dataID);

		return $dataID;
	}

	public function updateTV_sql($id,$username,$password,$level,$ten,$email,$phone)
	{
		$dulieuthanhvien = array(
			'USER_ID' => $id,
			'USER_USERNAME' => $username,
			'USER_PASSWORD' => md5($password),
			'USER_LEVEL' => $level,
			'USER_NAME' => $ten,
			'USER_EMAIL' =>$email,
			'USER_PHONE' => $phone, 	
		);

		$this->db->where('USER_ID', $id);
		return $this->db->update('users', $dulieuthanhvien);
	}
}
