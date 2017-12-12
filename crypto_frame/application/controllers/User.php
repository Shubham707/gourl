<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('session','Rpc');
        $this->load->model('User_model');
        $this->load->database();
         if($this->session->userdata('user_id')=='')
        {
            redirect('user/login');
        }
    }
    public function login()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/login');
		$this->load->view('frontend/footer');
	}
	public function signup()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/signup');
		$this->load->view('frontend/footer');
	}
    public function public_key()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/public_key');
        $this->load->view('frontend/footer');
    }
    public function update_key()
    {
        echo $id=$_REQUEST['id'];
        $sql="SELECT * FROM `security_key` WHERE user_id='$id'";
        $data['allKey']= $this->db->query($sql)->result();
        $this->load->view('frontend/header');
        $this->load->view('frontend/update-security',$data);
        $this->load->view('frontend/footer');
    }
    public function user_save()
    {
        $rand=
    	$data = array(
    		'title' => 		$this->input->post('title'),
    		'firstname'=>	$this->input->post('firstname'),
    		'lastname'=>	$this->input->post('lastname'),
    		'email'=>		$this->input->post('email'),
    		'country'=>		$this->input->post('country'),
    		'state'=>		$this->input->post('state'),
    		'city'=>		$this->input->post('city'),
    		'username'=>	$this->input->post('username'),
            'password'=>    hash('sha256', strtolower($this->input->post('password'))),
    	);
    	
    	$this->User_model->dataSave($data);
        $value['message']="Registration Successfull!";
        $this->load->view('frontend/header', $value);
        $this->load->view('frontend/login', $value);
        $this->load->view('frontend/footer', $value);

    }
    public function security_key()
    {
        $public_key=$this->public_key_pass(); 
        $private_key=$this->private_key_pass();
        $pub=md5($public_key);
        $pri=md5($private_key);

        $privateKey= $public_key.''.$this->input->post('coinName').''.$pub;
        $publicKey= $private_key.''.$this->input->post('coinName').''.$pri;
        $boxName=$this->input->post('boxName');
        $id=$this->input->post('user_id');
        $data = array(
            'boxID' =>       $this->input->post('boxID'),
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
                'boxID' =>       $this->input->post('boxID'),
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
           /* print_r($data); die();*/
       
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

}
