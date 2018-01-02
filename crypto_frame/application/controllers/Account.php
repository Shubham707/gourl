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
        $this->load->model('User_model');
        $this->load->model('Coin_model');
        $this->load->database();
        $this->load->library('parser');
        $email=$this->session->userdata('email');
        $boxid=$this->session->userdata('box_id');
        if($this->session->userdata('is_logged_in')==false)
        {
            redirect('user/login');
        }

    }
    public function my_account()
    {
        $email=$this->session->userdata('email');
        $boxid=$this->session->userdata('box_id');
        $keyValue['getKey']=$this->Account_model->view_account();
        $keyValue['getMonitiger']=$this->Account_model->monetiserList($email);
        $keyValue['getaffiliated']=$this->Account_model->affiliatedList($email);

        $this->load->view('frontend/my-account',$keyValue); 
    }
    
    public function monitiser()
    {
        $this->load->view('frontend/cryptocoin-monetiser');
    }
    public function cryptocoin($value,$id)
    {
        $getData=$this->Account_model->coinboxs_payment($value,$id);
        $rpc_host = "104.219.251.147";
        $rpc_user="EBTC147";
        $rpc_pass="33Mj169rVg9d55Ef1QPt";
        $rpc_port="8116";
       /* $getData=$this->Account_model->invoice($coin);*/
        $email=$this->session->userdata('email');
        $id=$this->session->userdata('user_id');
        $boxid=$this->session->userdata('box_id');

        $security=$this->Account_model->security_key_listing($id,$boxid);
         $keyValue=$this->Account_model->paymentCoin();
         
         $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
         $balance=$client->getBalance($email); 
         $address=$client->getAddress($email);
         $newaddress=$client->getNewAddress($email);
         $keyValue=$this->Account_model->view_account();
            $data=array(
                'address'=>$address,
                'balance'=>$balance,
                'email'=> $email,
                'newAddress'=>$newaddress,
                'coin'=> 'Bitcoin',
                'allData'=>$keyValue,
                'security'=>$security,
            );
            /*echo "<pre>";
            print_r($data);die();
            echo "</pre>";*/
         
     
        $this->load->view('frontend/add-payment', $data);
        
    }
   public function security_key()
    {
        $public_key=$this->public_key_pass(); 
        $private_key=$this->private_key_pass();
        $pub=md5($public_key);
        $pri=md5($private_key);
        $boxID=$this->User_model->listing();
        $total=$boxID + 1;

        $privateKey= $public_key.''.$this->input->post('coinName').''.$pub;
        $publicKey= $private_key.''.$this->input->post('coinName').''.$pri;
        $boxName=$this->input->post('boxName');
        $id=$this->input->post('user_id');
        $data = array(
            'boxID' =>       $boxID,
            'multicurrencyID'=>$total,
            'boxName'=>      $this->input->post('boxName'),
            'user_id'=>      $id,
            'publicKey'=>    $publicKey,
            'privateKey'=>   $privateKey,
            'coinName'=>     $this->input->post('coinName'),
            'boxType'=>      $this->input->post('boxType'),
            'isLockAddr'=>   $this->input->post('isLockAddr'),
            'email'=>        $this->input->post('email'),
            'callbackUrl'=>  $this->input->post('callbackUrl'),
            'isAdult'=>      $this->input->post('isAdult'),
            'boxType'=>      $this->input->post('boxType'),
            'isLockAddr'=>   $this->input->post('isLockAddr'),
            'isAdult_exst'=> $this->input->post('isAdult_exst'),
            'start_time'=>   $this->input->post('start_time'),
        );
        $keyID=$this->Account_model->securities_key($data);

        $sql="select * from security_key where user_id='$id'";
        $getValue=$this->db->query($sql)->result();

        $keyData= array(
        'security' => $keyID, 
        'msg'=>'Create Public and Private key ',
        'securityData'=>$getValue,
        );
        //echo var_dump($keyData);
        //die();
       
        $this->load->view('frontend/public_key',$keyData);
 

      
    }
    public function security_update()
    {
        $public_key=$this->public_key_pass(); 
        $private_key=$this->private_key_pass();
        $pub=md5($public_key);
        $pri=md5($private_key);

        $privateKey= $public_key.''.$this->input->post('coinName').''.$pub;
        $publicKey= $private_key.''.$this->input->post('coinName').''.$pri;
        $boxName=$this->input->post('boxName');
        $id=$this->input->post('key_id');
        if($id){
            $data = array(
                'key_id' =>      $this->input->post('key_id'),
                'boxName'=>      $this->input->post('boxName'),
                'user_id'=>      $this->input->post('user_id'),
                'publicKey'=>    $publicKey,
                'privateKey'=>   $privateKey,
                'coinName'=>     $this->input->post('coinName'),
                'boxType'=>      $this->input->post('boxType'),
                'isLockAddr'=>   $this->input->post('isLockAddr'),
                'email'=>        $this->input->post('email'),
                'callbackUrl'=>  $this->input->post('callbackUrl'),
                'isAdult'=>      $this->input->post('isAdult'),
                'boxType'=>      $this->input->post('boxType'),
                'isLockAddr'=>   $this->input->post('isLockAddr'),
                'isAdult_exst'=> $this->input->post('isAdult_exst'),
                'start_time'=>   $this->input->post('start_time'),
            );
             $this->User_model->Account_model($data,$id);
        }
       
        $sql="select * from security_key where key_id='$id'";
        $getValue=$this->db->query($sql)->result();

        $keyData= array( 
        'msg'=>'Create Public and Private key ',
        'allKey'=> $getValue,
        );

        $this->load->view('frontend/update-security',$keyData);

    }

    function public_key_pass($chars = 10) 
    {
       $letters = 'abcefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
       return $val=substr(str_shuffle($letters), 0, $chars);
    }
    function private_key_pass($chars = 10) 
    {
       $letters = 'abcefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
       return $val=substr(str_shuffle($letters), 0, $chars);
    }
    public function public_key()
    {
        $coin=$this->Coin_model->listing();
       /* $sql="SELECT * FROM security_key where key_id='48'";
        $security_key= $this->db->query($sql)->result();
        foreach ($security_key as $key => $value) {
            $val=$value->key_id;
        }*/
        
        $data= array(
            'allCoin' => $coin,
         );
  
        $this->load->view('frontend/public_key',$data);
   }
    public function update_key()
    {
        $id=$_REQUEST['key_id']; //die();
        $sql="SELECT * FROM `security_key` WHERE key_id='$id'";
        $data['allKey']= $this->db->query($sql)->result();
    
        $this->load->view('frontend/update-security',$data);
   
    }
    public function coinbox($multiId, $boxid)
    {
        $query['allKey']=$this->Account_model->multicurrency($multiId, $boxid);
   
        $this->load->view('frontend/update-security',$query);
     
    }
    public function coin_boxes($id,$value)
    {  
        $query=$this->Account_model->coinboxs_payment($value,$id);
        $data = array(
            'payment_details' => $query,
            'coin' => $value,
        );
      
        $this->load->view('frontend/coinbox-payment',$data);
      
        
    }

}
