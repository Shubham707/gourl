<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Shubham Sahu
*varsion :1.0.1
*/ 
class Cart extends CI_Controller
{
	
	function __construct(argument)
	{
		parent::__construct();		
	}
	public function index()
	{	
	
		$this->load->model("MBrand");
		$this->load->model("MRcat");
		
		$arr['page'] = 'Payment Cart';
		$arr['brand']=$this->MBrand->listBrand();
		$arr['rcat']=$this->MRcat->listRcat();
		
		if (!$this->cart->contents()){
			$arr['message'] = '<p>Your cart is empty!</p>';
		}else{
			$arr['message'] = $this->session->flashdata('message');
		}

		$this->load->view('vwCart', $arr);
	}

	public function add()
	{
		if($this->input->get_post('fld_rcat_id'))
			$rand=$this->input->get_post('fld_rcat_id').htmlspecialchars($this->input->get_post('fld_product_id'));
		else
			$rand=rand(0,6);
		
		    $insert_room = array(
			'id' => $rand,
			'prdid' => htmlspecialchars($this->input->get_post('fld_product_id')),
			'ground_type' => $this->input->get_post('fld_rcat_id'),
			'name' => $this->input->get_post('fld_product_name'),
			'timeslot' => $this->input->get_post('fancy-checkbox-default'),
			'price' => $this->input->get_post('price'),
			'qty'=>1
		);		
		$this->cart->insert($insert_room);
	}
	public function remove($rowid) 
	{
		if ($rowid=="all"){
			$this->cart->destroy();
		}else{
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
			$this->cart->update($data);
		}
		$this->session->unset_userdata('voucher_code');
		$this->session->unset_userdata('voucher_discount');
		$this->session->unset_userdata('voucher_status');
				
		redirect('cart');
	}
	public function update_cart()
	{
		
		$row_ids = $this->input->get_post('row_id');
		$qty = $this->input->get_post('cart_qty');
		$price = $this->input->get_post('price');
		
		for($i=0;$i<count($row_ids);$i++){
			$data = array(
					'rowid'   => $row_ids[$i],
					'qty'     => $qty[$i],
					'price' => $qty[$i]*$price[$i]
			);
	
			$this->cart->update($data);
		}
		
		redirect('cart');
	}	
	
	public function coupan()
	{
		$this->load->model("MVoucher");

	   $cart = $this->cart->contents();
	   $grand_total = 0;	
	   foreach ($cart as $item): 
	   	$grand_total = $grand_total + $item['subtotal'];
	   endforeach;
	   $this->session->unset_userdata('voucher_code');
	   $this->session->unset_userdata('voucher_discount');
	   $this->session->unset_userdata('voucher_status');
	   if($grand_total>699){
		   $this->MVoucher->check_coupan();
	   }else{
	   		$this->session->set_userdata(array('voucher_status' => '2'));
	   }
	   redirect('cart');
	}	
	
	public function check_coupan()
	{
		$this->load->model("MVoucher");
		$data=$this->MVoucher->check_coupan();
		if($data==1)
		{
			//echo '<p style="color:green;">Coupan is Applicable</p>';
			echo'1';
		}else{
			echo'<p style="color:red;">Coupan is not Valid</p>';
			$this->session->unset_userdata('voucher_code');
			$this->session->unset_userdata('voucher_discount');
			$this->session->unset_userdata('voucher_status');
		}
	}	
	
	public function check_coupan1()
	{
		$this->load->model("MVoucher");
		$data=$this->MVoucher->check_coupan();
		if($data==1)
		{
			echo'1~'.$this->session->userdata('voucher_discount');
		}else if($data==''){
			echo'2';
			$this->session->unset_userdata('voucher_code');
			$this->session->unset_userdata('voucher_discount');
			$this->session->unset_userdata('voucher_status');
		}
	}	
}