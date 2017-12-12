<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once APPPATH.'third_party/jsonRPCClient.php';
include_once APPPATH.'third_party/Client.php';
include_once APPPATH.'third_party/cryptobox_config.php';
include_once APPPATH.'third_party/cryptobox.php';

class Account extends CI_Controller 
{

    
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('session','Rpc');
        $this->load->model('Account_model');
        $this->load->database();
        if($this->session->userdata('is_logged_in')==false)
        {
            redirect('user/login');
        }


    }
    public function my_account()
    {
        $id='1';
        $keyValue['getKey']=$this->Account_model->view_account($id);
        $this->load->view('frontend/headerfront');
        $this->load->view('frontend/my-account',$keyValue);
        $this->load->view('frontend/footerfront');
    }
    public function affiliated()
    {
        $this->load->view('frontend/headerfront');
        $this->load->view('frontend/cryptocoin-affiliated');
        $this->load->view('frontend/footerfront');
    }
    public function monitiser()
    {
        $this->load->view('frontend/headerfront');
        $this->load->view('frontend/cryptocoin-monetiser');
        $this->load->view('frontend/footerfront');
    }
    public function cryptocoin()
    {
        $rpc_host = "104.219.251.147";
        $rpc_user="EBTC147";
        $rpc_pass="33Mj169rVg9d55Ef1QPt";
        $rpc_port="8116";

        $coin=$_REQUEST['multiCurrency'];
        $getData=$this->Account_model->invoice($coin);
        $email="shubhamsahu707@gmail.com";
         $new= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
         $balance=$new->getBalance($email); 
         $address=$new->getAddress($email);
        $data=array(
            'address'=> $address,
            'balance'=> $balance,
            'coin'=> $coin,
            'email'=> $email,
        );
        $this->load->view('frontend/headerfront');
        $this->load->view('frontend/add-payment', $data);
        $this->load->view('frontend/footerfront');
    }
   /* public function ($boxid)
    {
       echo  $boxid;
    }
    */

}
