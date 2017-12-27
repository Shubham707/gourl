<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
        //$this->load->model('Product_model');
        $this->load->database();
        $this->load->library('session','Rpc');
         /*if($this->session->userdata('user_id')=='')
        {
            redirect('user/login');
        }*/
    }
	

	public function index()
	{
	
		$this->load->view('frontend/index');
	

	}
	public function index_default()
	{
		
		$this->load->view('frontend/index-default');
	
	}
	public function about_us()
	{

		$this->load->view('frontend/about-us');
	
	}
	public function contacts()
	{
	
		$this->load->view('frontend/contacts');
		
	}
	public function pricing()
	{
		
		$this->load->view('frontend/pricing');
		
	}
	public function blog_grid()
	{
		
		$this->load->view('frontend/blog-grid');
		
	}
	public function blog_post()
	{
	
		$this->load->view('frontend/blog-post');
	
	}
	public function pay_per_post()
	{
	
		$this->load->view('frontend/pay-per-post');
	
	}
	public function pay_multi_post()
	{
	
		$this->load->view('frontend/portfolio-2column');

	}
	public function account()
	{
	
		$this->load->view('frontend/account');
	
	}
	public function pay_per_product()
	{
		$sql="select * from crypto_products";
    	$get['getProduct']=$this->db->query($sql)->result();

        $this->load->view('frontend/pay-per-product',$get);

	}
}

