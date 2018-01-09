<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once APPPATH.'third_party/jsonRPCClient.php';
include_once APPPATH.'third_party/Client.php';


class Payment extends CI_Controller 
{

	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
         $this->load->model('Account_model');
         $this->load->model('Coin_model');
        $this->load->database();
        $this->load->library('session','Rpc');
        $this->load->model('Product_model');
         if($this->session->userdata('user_id')=='')
        {
            redirect('user/login');
        }
    }
    public function index()
    {
        $rpc_host = "104.219.251.147";
        $rpc_user="EBTC147";
        $rpc_pass="33Mj169rVg9d55Ef1QPt";
        $rpc_port="8116";
        $email=$this->session->userdata('email');
        $id=$this->session->userdata('user_id');
        $boxid=$this->session->userdata('box_id');

        $security=$this->Account_model->security_key_listing($id,$boxid);
         $keyValue=$this->Account_model->paymentCoin();

         $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
         $balance=$client->getBalance($email); 
         $newaddress=$client->getNewAddress($email);
         $address=$client->getAddress($email);

         $data=array(
            'address'=>$address,
            'balance'=>$balance,
            'email'=> $email,
            'coin'=> 'Bitcoin',
            'newAddress'=>$newaddress,
            'allData'=>$keyValue,
            'security'=>$security,
        );
         $data['invoice']=$this->load->view('frontend/payment-invoice',$data,true);
        $this->load->view('frontend/add-payment', $data);
    }

    public function payment_add()
    {
        $coin=$_REQUEST['multiCurrency'];
    }

    public function new_payment()
    {
         $coins=$this->Coin_model->listing();
         $id=$this->session->userdata('box_id');

         $data=array(
            'boxid'=> $id,
            'coins'=> $coins,
            );
         $this->load->view('frontend/payment-box',$data);
    }
    public function secret_key()
    {
 
        $this->load->view('frontend/all-key');
   
    }
    public function unrecognised_received_payments()
    {
        $data['country']=$this->Product_model->country();
 
        $this->load->view('frontend/Payments_notconfirm',$data);

    }
    public function auto_payments_external_wallet()
    {
        $data['country']=$this->Product_model->country();
        $this->load->view('frontend/Payments_confirm',$data);
    }
    public function payment_successfull()
    {
        $data['country']=$this->Product_model->country();
        $this->load->view('frontend/Payments_Successfully',$data);
      
    }
    public function multi_pay_post()
    {
        $coins=$this->Coin_model->listing();
         $id=$this->session->userdata('box_id');

         $data=array(
            'boxid'=> $id,
            'coins'=> $coins,
            );
        $this->load->view('frontend/multi-payment-post',$data);
    }


}
