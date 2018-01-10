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
        $this->load->model('Wallet_model');
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

        $boxId=$this->input->post('boxId');
        $boxname=$this->input->post('coinLabel');
        
        $getDetail=$this->Wallet_model->getDetails($boxId,$email,$boxname);
        //print_r( $getDetail[0]->boxID); die();
        if ($getDetail[0]->publicKey==$this->input->post('privateURL')) 
        {
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
        else{
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
            $getArray['message']="Your public key id is wrong!";
            $getArray=$this->session->set_flashdata('flashSuccess', 'This is a success message.');
            $this->load->view('frontend/create-button',$getArray);
        }
        //print_r($getArray); die();
       
    }
    public function withdrawBitcoin()
    {
        $rpc_host = "104.219.251.147";
        $rpc_user="EBTC147";
        $rpc_pass="33Mj169rVg9d55Ef1QPt";
        $rpc_port="8116";

        

        $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
        $balance=$client->getBalance($email); 
        $address=$client->getAddress($email);
        $newaddress=$client->getNewAddress($email);

        $rand='#inv-'.rand(99999,10000);

        $boxId=$this->input->post('boxId');
        $email=$this->input->post('email');
        $boxname=$this->input->post('boxname');
        $getDetail=$this->Wallet_model->getDetails($boxId,$email,$boxname);
        print_r($getDetail['boxID']); die();

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
    }
    public function multi_wallet_payment()
    {

       /* $rpc_host = "104.219.251.147";
        $rpc_user="EBTC147";
        $rpc_pass="33Mj169rVg9d55Ef1QPt";
        $rpc_port="8116";

        $email=$this->input->post('email');
        echo $extract=$str = implode(",",$_REQUEST['bitcoin']);
        

        $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
        $balance=$client->getBalance($email); 
        $address=$client->getAddress($email);
        $newaddress=$client->getNewAddress($email);
        $this->load->view('frontend/multiinvoice');*/
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

        $boxId=$this->input->post('boxId');
        $boxname=$this->input->post('coinLabel');
        
        $getDetail=$this->Wallet_model->getDetails($boxId,$email,$boxname);
        //print_r( $getDetail[0]->boxID); die();
        if ($getDetail[0]->publicKey==$this->input->post('privateURL')) 
        {
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
                $this->load->view('frontend/cart_view',$getArray);
        }
        else{
            
            $getArray['message']="Your public key id is wrong!";
            $this->index($getArray);
        }
        //print_r($getArray); die();
       $this->load->view('frontend/cart_view',$getArray);
    }
    
    
}

