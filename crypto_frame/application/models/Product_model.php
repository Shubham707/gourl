<?php 
/**
* product save
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model 
{
	public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }

	public function product_add($data) 
	{
		return $this->db->insert('crypto_products', $data);
		 
	}

}

