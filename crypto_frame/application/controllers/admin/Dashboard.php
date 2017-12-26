<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{   
	public function __construct() 
    {
        parent::__construct();

    }

    public function index()
    {
     
       $this->load->view('backend/dashboard');
    
    }
    /*public function dashboard()
    {
      
       $this->load->view('backend/dashboard');
   
    }*/

}
