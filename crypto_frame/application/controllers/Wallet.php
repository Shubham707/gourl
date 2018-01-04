<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wallet extends CI_Controller 
{
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('cart');
        $this->load->model('Cart_model');
        $this->load->database();
        $this->load->library('session','Rpc');
    }
	
    public function index()
    {
        if (!$this->cart->contents()){
            $arr['message'] = '<p>Your cart is empty!</p>';
        }else{
            $arr['message'] = $this->session->flashdata('message');
        }

        $this->load->view('frontend/cart_view', $arr);
    }
    public function add()
    {
         
            $rand=rand(0,6);
            $insert_room = array(
            'id' => $rand,
            'privateURL' => htmlspecialchars($this->input->get_post('privateURL')),
            'privateText' => $this->input->get_post('privateText'),
            'publicTitle' => $this->input->get_post('publicTitle'),
            'walletAddress' => $this->input->get_post('walletAddress'),
            'expiryDate' => $this->input->get_post('expiryDate'),
            'boxId' => $this->input->get_post('boxId'),
            'coinLabel'=> $this->input->get_post('coinLabel'),
        );      
        $arr['']=$this->cart->insert($insert_room);
         $this->load->view('frontend/cart_view', $arr);
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
}

