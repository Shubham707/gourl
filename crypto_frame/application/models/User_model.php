<?php 
/**
* user save
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	
	public function dataSave($data)
	{
		return $val=$this->db->insert('users', $data);
	}
	public function login($data) 
	{

		$condition = "user_name =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			
			return true;

		} else {

			return false;
		}
	}

		// Read data from database to show data in admin page
	public function read_user_information($username) 
	{

		$condition = "user_name =" . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
		return $query->result();
		} else {
		return false;
		}
	}

	
	public function listing()
	{
		$data= $this->db->query('select * from users')->result();
		foreach ($data as $key => $row) 
		{
			return $row->box_id;
		}
	}
	public function edit_user($value)
	{
		return $this->db->select('*')->where('user_id', $value)->get('users')->result();
	}
	public function updateUser($value)
	{
		return $this->db->update('users',$value);
	}
	public function user_listing()
	{
		return $this->db->select('*')->from('users')->get()->result();
	}
}

