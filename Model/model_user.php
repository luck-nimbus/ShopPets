<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

	public function is_logged_in($username,$password)
	{
		$this->db->where('user_username',$username);
		$this->db->where('user_password', md5($password));
		$this->db->from('users');
		$query = $this->db->get();
		if($query->num_rows() == 1){
			return $query->result();
		}else{
			return false;
		}
	}
}
