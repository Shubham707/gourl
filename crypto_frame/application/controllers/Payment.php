<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once APPPATH.'third_party/jsonRPCClient.php';
include_once APPPATH.'third_party/Client.php';
include_once APPPATH.'third_party/cryptobox_config.php';
include_once APPPATH.'third_party/cryptobox.php';

class Payment extends CI_Controller 
{

	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
         $this->load->model('Account_model');
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
        $keyValue=$this->Account_model->view_account();
         $new= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
         $balance=$new->getAddress($email); 
         $address=$new->getBalance($email);
         $data=array(
            'address'=>$address,
            'balance'=>$balance,
            'email'=> $email,
            'coin'=> 'Bitcoin',
            'allData'=>$keyValue,
        );
        $this->load->view('frontend/header');
        $this->load->view('frontend/add-payment', $data);
        $this->load->view('frontend/footer');

    }

    public function payment_add()
    {
        $coin=$_REQUEST['multiCurrency'];
    }



    /*function cryptobox_new_payment($paymentID = 0, $payment_details = array(), $box_status = "")
    {
         
    }*/
    public function secret_key()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/all-key');
        $this->load->view('frontend/footer');
    }
    public function unrecognised_received_payments()
    {
        $data['country']=$this->Product_model->country();
        $this->load->view('frontend/header');
        $this->load->view('frontend/Payments_notconfirm',$data);
        $this->load->view('frontend/footer');
    }
    public function auto_payments_external_wallet()
    {
        $data['country']=$this->Product_model->country();
       
        $this->load->view('frontend/header');
        $this->load->view('frontend/Payments_confirm',$data);
        $this->load->view('frontend/footer');
    }
    public function payment_successfull()
    {
        $data['country']=$this->Product_model->country();
        $this->load->view('frontend/header');
        $this->load->view('frontend/Payments_Successfully',$data);
        $this->load->view('frontend/footer');
    }


}
