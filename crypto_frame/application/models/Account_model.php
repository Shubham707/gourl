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
    public function paymentCoin()
    {
    	$sql="select * from coin";
    	return $query=$this->db->query($sql)->result();
    }

	public function view_account() 
	{
		
		$sql="select a.*,b.*,c.* from security_key a left join coin b on a.boxName=b.coin_name left join crypto_payments c on (c.boxID=a.boxID and c.coinLabel=a.boxName)";
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
	public function coinboxs_payment($value,$id)
	{
		$sql="SELECT * FROM crypto_payments, security_key WHERE crypto_payments.boxID='$id' AND security_key.boxID='$id' AND crypto_payments.coinLabel='$value' AND security_key.boxName='$value'";
		 return $query = $this->db->query($sql)->result();

	}
	public function securities_key($value)
	{
		$this->db->insert('security_key',$value);

	}
	public function securities_update($value,$id)
	{
		
		return $this->db->update('security_key',$value);
		
	}
	public function security_key_listing($id,$boxid)
	{
		$options=array('user_id'=>$id, 'boxID'=> $boxid,);
		return $query =  $this->db->get_where('security_key', $options)->result();
		/*print_r($query);
		die();*/
	}

}

