<?php 
/**
* product save
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model 
{
	public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }

	public function view_account($data) 
	{
		
		$sql="SELECT * FROM crypto_payments where userID='$data'";
		return $val=$this->db->query($sql)->result();
		 
	}
	public function invoice($coin) 
	{
		$sql="SELECT * FROM crypto_products WHERE productTitle ='$coin'";
		return $value= $this->db->query($sql)->result();
		 
	}

}

