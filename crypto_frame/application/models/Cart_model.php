<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Shubham Sahu 
* version: 1.0.1
*/
class Cart_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function retrieve_products()
	{
	$query = $this->db->get('coin');
	return $query->result();
	}

	public function insert_customer($data)
	{
	$this->db->insert('customers', $data);
	$id = $this->db->insert_id();
	return (isset($id)) ? $id : FALSE;
	}
	public function insert_order($data)
	{
	$this->db->insert('orders', $data);
	$id = $this->db->insert_id();
	return (isset($id)) ? $id : FALSE;
	}

	public function insert_order_detail($data)
	{
	$this->db->insert('order_detail', $data);
	}

	
}