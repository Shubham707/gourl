

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Wallet_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	public function getDetails($publicId, $email, $boxname)
	{

		 $sql="SELECT * FROM `security_key` WHERE publicKey='$publicId' AND email='$email' AND `boxName`='$boxname'";
		return $query=$this->db->query($sql)->result();
		
	}
	public function withdraw_final($email,$bitcoin)
	{
		$sql="select * from security_key where boxName='bitcoin' AND email='shubhamsahu707@gmail.com'";	
		 return $return=$this->db->query($sql)->result();
		// print_r($return); die();
	}
}
?>

