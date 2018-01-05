<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once APPPATH.'third_party/jsonRPCClient.php';
include_once APPPATH.'third_party/Client.php';

class Wallet extends CI_Controller 
{
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->database();
        $this->load->library('Rpc');
    }
	
    public function index()
    { 

       $rpc_host = "104.219.251.147";
        $rpc_user="EBTC147";
        $rpc_pass="33Mj169rVg9d55Ef1QPt";
        $rpc_port="8116";

        $email=$this->input->post('email');

        $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
        $balance=$client->getBalance($email); 
        $address=$client->getAddress($email);
        $newaddress=$client->getNewAddress($email);

        $rand='#inv-'.rand(99999,10000);

        $getArray= array(
            'id' => $rand,
            'privateURL' =>$this->input->post('privateURL'),
            'privateText' => $this->input->post('privateText'),
            'publicTitle' => $this->input->post('publicTitle'),
            'walletAddress' => $this->input->post('walletAddress'),
            'expiryDate' => $this->input->post('expiryDate'),
            'boxId' => $this->input->post('boxId'),
            'coinLabel'=> $this->input->post('coinLabel'),
            'coinRate'=> $this->input->post('coinRate'),
            'affiUSD'=> $this->input->post('affiUSD'),
            'balance'=> $balance,
            'address'=> $address,
            'newaddress'=> $newaddress,
        ); 
       $this->load->view('frontend/create-button',$getArray);
    }
    public function withdraw()
    {
       $rpc_host = "104.219.251.147";
        $rpc_user="EBTC147";
        $rpc_pass="33Mj169rVg9d55Ef1QPt";
        $rpc_port="8116";

        $email=$this->input->post('email');

        $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
        $balance=$client->getBalance($email); 
        $address=$client->getAddress($email);
        $newaddress=$client->getNewAddress($email);

        $rand='#inv-'.rand(99999,10000);

        $getArray= array(
            'id' => $rand,
            'privateURL' =>$this->input->post('privateURL'),
            'privateText' => $this->input->post('privateText'),
            'publicTitle' => $this->input->post('publicTitle'),
            'walletAddress' => $this->input->post('walletAddress'),
            'expiryDate' => $this->input->post('expiryDate'),
            'boxId' => $this->input->post('boxId'),
            'coinLabel'=> $this->input->post('coinLabel'),
            'coinRate'=> $this->input->post('coinRate'),
            'affiUSD'=> $this->input->post('affiUSD'),
            'balance'=> $balance,
            'address'=> $address,
            'newaddress'=> $newaddress,
        );
        //print_r($getArray); die();
       $this->load->view('frontend/cart_view',$getArray);
    }
    public function withdrawBitcoin()
    {
        $rpc_host = "104.219.251.147";
        $rpc_user="EBTC147";
        $rpc_pass="33Mj169rVg9d55Ef1QPt";
        $rpc_port="8116";

        $email=$this->input->post('email');

        $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
        $balance=$client->getBalance($email); 
        $address=$client->getAddress($email);
        $newaddress=$client->getNewAddress($email);

        $rand='#inv-'.rand(99999,10000);

        $getArray= array(
            'id' => $rand,
            'privateURL' =>$this->input->post('privateURL'),
            'privateText' => $this->input->post('privateText'),
            'publicTitle' => $this->input->post('publicTitle'),
            'walletAddress' => $this->input->post('walletAddress'),
            'expiryDate' => $this->input->post('expiryDate'),
            'boxId' => $this->input->post('boxId'),
            'coinLabel'=> $this->input->post('coinLabel'),
            'coinRate'=> $this->input->post('coinRate'),
            'affiUSD'=> $this->input->post('affiUSD'),
            'balance'=> $balance,
            'address'=> $address,
            'newaddress'=> $newaddress,
        );
        
        print_r($getArray); die();
    }
    
    
}

