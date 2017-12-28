<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once APPPATH.'third_party/jsonRPCClient.php';
include_once APPPATH.'third_party/Client.php';
include_once APPPATH.'third_party/cryptobox_config.php';
include_once APPPATH.'third_party/cryptobox.php';

class Affiliated extends CI_Controller 
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
    public function index()
    {
        $data['boxid']=$this->session->userdata('box_id');
        $data['coins']=$this->Coin_model->listing();
        $this->load->view('frontend/cryptocoin-affiliated',$data);
    }
    public function saveAffiliated()
    {
        $data=array(
            'privateURL'=>$this->input->post('privateURL'),
            'privateText'=>$this->input->post('privateText'),
            'publicTitle'=>$this->input->post('publicTitle'),
            'coinRate'=>$this->input->post('coinRate'),
            'affiUSD'=>$this->input->post('affiUSD'),
            'walletAddress'=>$this->input->post('walletAddress'),
            'expiryDate'=>$this->input->post('expiryDate'),
            'boxId'=>$this->input->post('boxId'),
            'coinLabel'=>$this->input->post('coinLabel'),
        );
        $return=$this->Account_model->affiliatedSave($data);
        $this->affReturn($return);
        
    }
    public function affReturn($value)
    {
        if($value){
            $msg['boxid']=$this->session->userdata('box_id');
            $msg['coins']=$this->Coin_model->listing();
            $msg['success']="Record Saved Successfull!";
            $this->load->view('frontend/cryptocoin-affiliated',$msg);
        } else {
            $msg['boxid']=$this->session->userdata('box_id');
            $msg['coins']=$this->Coin_model->listing();
            $msg['success']="Record Not Saved!";
            $this->load->view('frontend/cryptocoin-affiliated',$msg);
        }
    }


}
