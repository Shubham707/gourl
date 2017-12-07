<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

		


class Membership extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
        //$this->load->library(array('session'));
	}
	

	public function pay_per_membership()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/pay-per-membership');
		$this->load->view('frontend/footer');
	}
	
}
