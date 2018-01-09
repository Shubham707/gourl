<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once APPPATH.'third_party/jsonRPCClient.php';
include_once APPPATH.'third_party/Client.php';

class Multicurrency extends CI_Controller 
{
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Wallet_model');
        $this->load->library('cart','session');
        $this->load->database();
        $this->load->library('Rpc');
    }
	
    public function index()
    { 
        if (!$this->cart->contents()){
           $arr['message']='<p>Your cart is empty!</p>';
        }else{
            $arr['message']=$this->session->flashdata('message');
        }
        $this->load->view('frontend/cart-display', $arr);
    }
    public function load()
    {
        $this->view();
    }
    public function add()
    {
        
        $rand="#smu-".rand(99999,10000);
       $insert_data= array(
            'invoiceid' => $rand,
            'privateURL' =>$this->input->get_post('privateURL'),
            'boxId' => $this->input->get_post('boxId'),
            'coinLabel'=> $this->input->get_post('coinLabel'),
            'coinRate'=> $this->input->get_post('coinRate'),
            'qty'=> '1',
        );
       $this->cart->insert($insert_data);
    }
    public function update()
    {
         $insert_data= array(
            'invoiceid' => $rand,
            'privateURL' =>$this->input->get_post('privateURL'),
            'boxId' => $this->input->get_post('boxId'),
            'coinLabel'=> $this->input->get_post('coinLabel'),
            'coinRate'=> $this->input->get_post('coinRate'),
            'qty'=> '1',
        );
        $this->cart->update($getArray);
         redirect(base_url().'payment/multi-payment-post-coin','refresh');
    }
    public function remove($value)
    {
        if ($rowid==="all")
        {
            $this->cart->destroy();
        }else{
            $data = array(
            'rowid' => $rowid,
            'qty' => 0
            );
            $this->cart->update($data);
        }

       redirect(base_url().'payment/multi-payment-post-coin','refresh');
     
    }
    
    
}

