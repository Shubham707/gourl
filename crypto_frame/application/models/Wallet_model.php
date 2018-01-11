

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
}
?>

