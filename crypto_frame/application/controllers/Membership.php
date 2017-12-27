<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

		


class Membership extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
       $this->load->library('session','Rpc');
        if($this->session->userdata('user_id')=='')
        {
            redirect('user/login');
        }
	}
	

	public function pay_per_membership()
	{
	
		$this->load->view('frontend/pay-per-membership');

	}
	
}
