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
        $this->load->database();
        $this->load->library('parser');
        $email=$this->session->userdata('email');
        if($this->session->userdata('is_logged_in')==false)
        {
            redirect('user/login');
        }

    }
    public function my_account()
    {
        $keyValue['getKey']=$this->Account_model->view_account();
        $this->load->view('frontend/header');
        $this->load->view('frontend/my-account',$keyValue);
        $this->load->view('frontend/footer');
    }
    public function affiliated()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/cryptocoin-affiliated');
        $this->load->view('frontend/footer');
    }
    public function monitiser()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/cryptocoin-monetiser');
        $this->load->view('frontend/footer');
    }
    public function cryptocoin()
    {
        $rpc_host = "104.219.251.147";
        $rpc_user="EBTC147";
        $rpc_pass="33Mj169rVg9d55Ef1QPt";
        $rpc_port="8116";

        $coin=$_REQUEST['multiCurrency'];
        $getData=$this->Account_model->invoice($coin);
        $email=$this->session->userdata('email');
         $new= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
         $balance=$new->getBalance($email); 
         $address=$new->getAddress($email);
        $keyValue=$this->Account_model->view_account();
        $data=array(
            'address'=> $address,
            'balance'=> $balance,
            'coin'=> $coin,
            'email'=> $email,
            'txAddress'=>$keyValue,
        );
        $this->load->view('frontend/header');
        $this->load->view('frontend/add-payment', $data);
        $this->load->view('frontend/footer');
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
        $keyID=$this->User_model->securities_key($data);

        $sql="select * from security_key where user_id='$id'";
        $getValue=$this->db->query($sql)->result();

        $keyData= array(
        'security' => $keyID, 
        'msg'=>'Create Public and Private key ',
        'securityData'=>$getValue,
        );
        //echo var_dump($keyData);
        //die();
        $this->load->view('frontend/header');
        $this->load->view('frontend/public_key',$keyData);
        $this->load->view('frontend/footer');

      
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
             $this->User_model->securities_update($data,$id);
        }
       
        $sql="select * from security_key where key_id='$id'";
        $getValue=$this->db->query($sql)->result();

        $keyData= array( 
        'msg'=>'Create Public and Private key ',
        'allKey'=> $getValue,
        );
        $this->load->view('frontend/header');
        $this->load->view('frontend/update-security',$keyData);
        $this->load->view('frontend/footer');
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
        $sql="SELECT * FROM security_key where key_id='48'";
        $security_key= $this->db->query($sql)->result();
        foreach ($security_key as $key => $value) {
            $val=$value->key_id;
        }
        $data= array(
            'security' => $val,
         );
        $this->load->view('frontend/header');
        $this->load->view('frontend/public_key',$data);
        $this->load->view('frontend/footer');
    }
    public function update_key()
    {
        $id=$_REQUEST['key_id']; //die();
        $sql="SELECT * FROM `security_key` WHERE key_id='$id'";
        $data['allKey']= $this->db->query($sql)->result();
        $this->load->view('frontend/header');
        $this->load->view('frontend/update-security',$data);
        $this->load->view('frontend/footer');
    }
    public function coinbox($multiId, $boxid)
    {
        $query['allKey']=$this->Account_model->multicurrency($multiId, $boxid);
        $this->load->view('frontend/header');
        $this->load->view('frontend/update-security',$query);
        $this->load->view('frontend/footer');
    }
    public function coin_boxes($id,$value)
    {  
        $query=$this->Account_model->coinboxs_payment($value,$id);
        $data = array(
            'payment_details' => $query,
            'coin' => $value,
        );
        $this->load->view('frontend/header');
        $this->load->view('frontend/coinbox-payment',$data);
        $this->load->view('frontend/footer');
        
    }

}
