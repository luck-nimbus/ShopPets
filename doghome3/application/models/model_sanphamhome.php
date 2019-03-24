<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_sanphamhome extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
    }
    public function getSP_sql()
		{
			$this->db->select('*');
			$this->db->where('PRO_ACTIVE = 1');
			$this->db->ORDER_BY('PRO_ID DESC');
			$this->db->limit(6, 1);
			$data = $this->db->get('product');
			$data = $data->result_array();
			return $data;
		}
		public function getSP_detail($id)
		{
			$this->db->select('*');
			$this->db->where('PRO_ACTIVE = 1');
			$this->db->where('PRO_ID',$id);
			$data = $this->db->get('product');
			$data = $data->result_array();
			return $data;
		}

}
?>