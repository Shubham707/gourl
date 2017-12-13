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
        $this->load->library('parser');
    }

	public function view_account() 
	{
		
		$sql="SELECT * FROM security_key,crypto_payments";
		return $val=$this->db->query($sql)->result();
		 
	}
	public function invoice($coin) 
	{
		$sql="SELECT * FROM crypto_products WHERE productTitle ='$coin'";
		return $value= $this->db->query($sql)->result();
		 
	}
	public function multicurrency($mutiid,$boxid)
	{
		 $sql = "SELECT * FROM security_key WHERE multicurrencyID = '$mutiid' AND boxID ='$boxid'";
           return $this->db->query($sql)->result();
	}

}

