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
    
    public function user_save()
    {
        $boxID=$this->User_model->listing();
        $total=$boxID + 1;
    	$data = array(
    		'title' => 		$this->input->post('title'),
    		'firstname'=>	$this->input->post('firstname'),
    		'lastname'=>	$this->input->post('lastname'),
    		'email'=>		$this->input->post('email'),
    		'country'=>		$this->input->post('country'),
    		'state'=>		$this->input->post('state'),
    		'city'=>		$this->input->post('city'),
    		'username'=>	$this->input->post('username'),
            'box_id'=>    $total,
            'password'=>    hash('sha256', strtolower($this->input->post('password'))),
    	);
    	
    	$this->User_model->dataSave($data);
        $value['message']="Registration Successfull!";
        $this->load->view('frontend/header', $value);
        $this->load->view('frontend/login', $value);
        $this->load->view('frontend/footer', $value);

    }
    
    

}
