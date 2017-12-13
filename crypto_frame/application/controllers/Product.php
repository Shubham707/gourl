<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller 
{

	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Product_model');
        $this->load->library('session','Rpc');
        $this->load->database();
         if($this->session->userdata('user_id')=='')
        {
            redirect('user/login');
        }
    }
    public function add_product()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/add-product');
        $this->load->view('frontend/footer');
    }
    public function add_pay_product()
    {
    	
    	$data=array(
		    "productTitle" => $this->input->post('gourlproductTitle'),
		    "priceUSD" => $this->input->post('gourlpriceUSD'),
		    "priceLabel" => $this->input->post('gourlpriceLabel'),
		    "purchases" => $this->input->post('gourlpurchases'),
		    "expiryPeriod" => $this->input->post('gourlexpiryPeriod'),
		    "lang" => $this->input->post('gourllang'),
		    "defShow" => $this->input->post('gourldefShow'),
		    "emailUserFrom" => $this->input->post('gourlemailUserFrom'),
		    "emailUserTitle" => $this->input->post('gourlemailUserTitle'),
		    "emailUserBody" => $this->input->post('gourlemailUserBody'),
		    "emailAdmin" => $this->input->post('gourlemailAdmin'),
		    "emailAdminFrom" => $this->input->post('gourlemailAdminFrom'),
		    "emailAdminBody" => $this->input->post('gourlemailAdminBody'),
		    "emailAdminTo" => $this->input->post('gourlemailAdminTo'),
		    "ak_action" => $this->input->post('ak_action'),
			);
    	 $this->Product_model->product_add($data);
    	 $sql="select * from crypto_products";
    	$get['getProduct']=$this->db->query($sql)->result();
    	
   		//echo $get['productID'];die();
        $this->load->view('frontend/header');
        $this->load->view('frontend/pay-per-product',$get);
        $this->load->view('frontend/footer');
    }
   
    

}
