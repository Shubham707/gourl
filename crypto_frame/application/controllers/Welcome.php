<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	

	public function index()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/index');
		$this->load->view('frontend/footer');

	}
	public function index_default()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/index-default');
		$this->load->view('frontend/footer');
	}
	public function about_us()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/about-us');
		$this->load->view('frontend/footer');
	}
	public function contacts()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/contacts');
		$this->load->view('frontend/footer');
	}
	public function pricing()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/pricing');
		$this->load->view('frontend/footer');
	}
	public function blog_grid()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/blog-grid');
		$this->load->view('frontend/footer');
	}
	public function blog_post()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/blog-post');
		$this->load->view('frontend/footer');
	}
	public function pay_per_post()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/pay-per-post');
		$this->load->view('frontend/footer');
	}
	public function pay_multi_post()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/portfolio-2column');
		$this->load->view('frontend/footer');
	}
	
	public function account()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/account');
		$this->load->view('frontend/footer');
	}
}
