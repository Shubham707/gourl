<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

ini_set('display', 0);
include_once APPPATH.'third_party/Client.php';


class Monetiser extends CI_Controller 
{   
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Rpc');
        $this->load->library('email','parser');
        $this->load->model('Account_model');
        $this->load->model('User_model');
        $this->load->model('Coin_model');
        $this->load->database();
        $email=$this->session->userdata('email');
        $boxid=$this->session->userdata('box_id');
        if($this->session->userdata('is_logged_in')==false)
        {
            redirect('user/login');
        }

    }
    public function index()
    {
    	$coins=$this->Coin_model->listing();
    	$id=$this->session->userdata('box_id');

        $data=array(
        	'boxid'=> $id,
            'coins'=> $coins,
    		);
        $this->load->view('frontend/cryptocoin-monetiser',$data);
    }
    public function saveMonetiser()
    {
        $data=array(
            'privateURL'=>$this->input->post('privateURL'),
            'privateText'=>$this->input->post('privateText'),
            'publicTitle'=>$this->input->post('publicTitle'),
            'coinRate'=>$this->input->post('coinRate'),
            'monUSD'=>$this->input->post('affiUSD'),
            'walletAddress'=>$this->input->post('walletAddress'),
            'expiryDate'=>$this->input->post('expiryDate'),
            'boxId'=>$this->input->post('boxId'),
            'coinLabel'=>$this->input->post('coinLabel'),
        );
        $return=$this->Account_model->monetiserSave($data);
        $this->monReturn($return);
        
    }
   
    public function monReturn($value)
    {
        if($value){
        	 $config = Array(
				  'protocol' => 'smtp',
				  'smtp_host' => 'smtp.gmail.com',
				  'smtp_port' => 587,
				  'smtp_user' => 'shubhamsahu707@gmail.com', // change it to yours
				  'smtp_pass' => 'shubham707', // change it to yours
				  'mailtype' => 'html',
				  'charset' => 'iso-8859-1',
				  'wordwrap' => TRUE
				);
		    $this->email->initialize($config);
        	$from_email = 'shubhamsahu707@gmail.com';
	       $to_email = 'shubhamsahu707@gmail.com';
	        $this->load->library('email');
	        $this->email->from($from_email, 'Identification');
	        $this->email->to($to_email);
	        $this->email->subject('Monetiser Payment');
	        $message=$this->load->view('frontend/invoice-temp');
	        $this->email->message($message);
	         $send=$this->email->send();
	        if($send){
            $msg['boxid']=$this->session->userdata('box_id');
            $msg['coins']=$this->Coin_model->listing();
            $msg['success']="Record Saved Successfull!";
            $this->load->view('frontend/cryptocoin-monetiser',$msg);
        	}
        	else{
        		$msg['boxid']=$this->session->userdata('box_id');
                $msg['coins']=$this->Coin_model->listing();
        		$msg['success']="Record Saved message is not send!";
        		$this->load->view('frontend/cryptocoin-monetiser',$msg);
        	}
        } else {
            $msg['boxid']=$this->session->userdata('box_id');
            $msg['coins']=$this->Coin_model->listing();
            $msg['success']="Record Not Saved!";
            $this->load->view('frontend/cryptocoin-monetiser',$msg);
        }
    }

}
