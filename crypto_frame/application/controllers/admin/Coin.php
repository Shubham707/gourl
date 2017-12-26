<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coin extends CI_Controller 
{   
	public function Coin() 
    {
        parent::__construct();
        $this->load->model('Coin_model');
		$this->load->helper(array('form', 'url'));
    }
   public function index()
    {
    	$value['getCoin']=$this->Coin_model->listing();
       $this->load->view('backend/coin/index',$value);
    }

    public function add_coin()
    {
      $this->load->view('backend/coin/add-coin');
    }
    public function edit_coin()
    {
      $this->load->view('backend/coin/edit-coin');
    }
    public function insert_coin()
    {
        if(@$_FILES['userfile']['name']!='')		
		{		
			$config = array(				
				'allowed_types' => 'jpg|jpeg|gif|png|pdf',				
				'upload_path' => base_url().'uploads',				
				'max_size' => 200000			
				);	
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			$this->upload->do_upload();		
			$image_data = $this->upload->data('userfile');
			$data = array(
                'coin_name' => $this->input->post('coin_name'),
                'coin_date' => $this->input->post('coin_date'),
                'coin_image' => $image_data['file_name'],
            );
            //print_r($data); die();
            $insertUserData = $this->Coin_model->addCoin($data);
            $value['getCoin']=$this->Coin_model->listing();
            
            $this->load->view('backend/coin/index',$value); 				
		}	
		else
		 {
				$error="error";	# code...
		}
    }
}
