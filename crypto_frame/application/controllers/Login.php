<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Login extends CI_Controller {

public function __construct() 
{
	parent::__construct();
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->library('session');
	$this->load->model('User_model');
}

///login user
public function login_user() 
{
	
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) 
		{
			
			$this->load->view('frontend/header');
	        $this->load->view('frontend/login');
	        $this->load->view('frontend/footer');
		} 
		else 
		{
			/*echo print_r($_POST);
			die();*/
			$data = array(
			'email' => $this->input->post('email'),
			'password' => hash('sha256', uniqid(mt_rand(), true) . "somesalt" . strtolower($this->input->post('password'))),
			);

			$result = $this->User_model->login($data);
			if ($result == TRUE) 
			{

				$username = $this->input->post('email');
				$result = $this->User_model->read_user_information($username);
					if ($result != false) 
					{
						$session_data = array(
						'username' => $result[0]->user_name,
						'email' => $result[0]->user_email,
						);
						// Add user data in session
						$this->session->set_userdata('logged_in', $session_data);
						$this->load->view('frontend/header');
				        $this->load->view('frontend/account');
				        $this->load->view('frontend/footer');
						///$this->load->view('admin_page');
					}
			} else 
			{
				$data = array('error_message' => 'Invalid Username or Password');
				$this->load->view('frontend/header',$data);
		        $this->load->view('frontend/login',$data);
		        $this->load->view('frontend/footer',$data);
			}
		}
}

// Logout from admin page
public function logout() 
{
		$sess_array = array(
		'username' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		$this->load->view('login_form', $data);
		}

}

