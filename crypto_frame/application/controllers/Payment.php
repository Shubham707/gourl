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
        $this->load->database();
        $this->load->library('session','Rpc');
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
        $new= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
         $address=$new->getAddress('shubhamsahu707@gmail.com'); 
        $data=array(
            'address'=>$address,
        );
        $this->load->view('frontend/headerfront');
        $this->load->view('frontend/add-payment', $data);
        $this->load->view('frontend/footerfront');

    }


}
