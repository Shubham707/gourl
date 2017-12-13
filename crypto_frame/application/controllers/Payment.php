<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once APPPATH.'third_party/jsonRPCClient.php';
include_once APPPATH.'third_party/Client.php';
include_once APPPATH.'third_party/cryptobox_config.php';
include_once APPPATH.'third_party/cryptobox.php';

class Payment extends CI_Controller 
{

	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->database();
        $this->load->library('session','Rpc');
        $this->load->model('Product_model');
         if($this->session->userdata('user_id')=='')
        {
            redirect('user/login');
        }
    }
    public function index()
    {
        $rpc_host = "104.219.251.147";
        $rpc_user="EBTC147";
        $rpc_pass="33Mj169rVg9d55Ef1QPt";
        $rpc_port="8116";
        $email="shubhamsahu707@gmail.com";
         $new= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
         $balance=$new->getAddress($email); 
         $address=$new->getBalance($email);
        $data=array(
            'address'=>$address,
            'balance'=>$balance,
            'email'=> $email,
            'coin'=> $coin,
        );
        $this->load->view('frontend/header');
        $this->load->view('frontend/add-payment', $data);
        $this->load->view('frontend/footer');

    }

    public function payment_add()
    {
        $coin=$_REQUEST['multiCurrency'];
    }



    function cryptobox_new_payment($paymentID = 0, $payment_details = array(), $box_status = "")
    {
         $payment_details = Array
         (
             "status"=>"payment_received",
             "err"=>"",
             "private_key_hash"=>"85770A30B97D3AC035EC32354633C1614CF76E1621A20B143A1FBDAD1FCBF25A6EC6C5F99FFF495DD1836E47AE0E37942EC0B04867BD14778B2C93967E4A7FAC",
              // sha512 hash of gourl payment box private_key
             "box"=>"120",
             "boxtype"=>"paymentbox",
             "order"=>"order15620A",
             "user"=>"user26",
             "usercountry">"USA",
             "amount">"0.0479166",
             "amountusd"=>"11.5",
             "coinlabel"=>"BTC",
             "coinname"=>"bitcoin",
             "addr"=>"14dt2cSbvwghDcETJDuvFGHe5bCsCPR9jW",
             "tx"=>"95ed924c215f2945e75acfb5650e28384deac382c9629cf0d3f31d0ec23db08d",
             "confirmed"=>0,
             "timestamp"=>"1422624765",
             "date"=>"30 January 2015",
             "datetime"=>"2015-01-30 13:32:45",
         );

               /* .............
            .............
            PLACE YOUR CODE HERE
            Update database with new payment, send email to user, etc
            Please note, all received payments store in your table `crypto_payments` also
            See - https://gourl.io/api-php.html#payment_history
            
            For example, you have own table `user_orders`...
            You can use function run_sql() from cryptobox.class.php ( https://gourl.io/api-php.html#run_sql )*/
            
            
            // Save new Bitcoin payment in database table `user_orders`
            $recordExists = run_sql("select paymentID as nme FROM `user_orders` WHERE paymentID = ".intval($paymentID));

            if (!$recordExists) run_sql("INSERT INTO `user_orders` VALUES(".intval($paymentID).",'".$payment_details["user"]."','".$payment_details["order"]."',".floatval($payment_details["amount"]).",".floatval($payment_details["amountusd"]).",'".$payment_details["coinlabel"]."',".intval($payment_details["confirmed"]).",'".$payment_details["status"]."')");
            
           
            // Received second IPN notification (optional) - Bitcoin payment confirmed (6+ transaction confirmations)
            if ($recordExists && $box_status == "cryptobox_updated")  run_sql("UPDATE `user_orders` SET txconfirmed = ".intval($payment_details["confirmed"])." WHERE paymentID = ".intval($paymentID));
         
            // Onetime action when payment confirmed (6+ transaction confirmations)
            $processed = run_sql("select processed as nme FROM `crypto_payments` WHERE paymentID = ".intval($paymentID)." LIMIT 1");
            if (!$processed && $payment_details["confirmed"])
            {
                // ... Your code ...
                // ... and update status in default table where all payments are stored - https://github.com/cryptoapi/Payment-Gateway#mysql-table
                $sql = "UPDATE crypto_payments SET processed = 1, processedDate = '".gmdate("Y-m-d H:i:s")."' WHERE paymentID = ".intval($paymentID)." LIMIT 1";
                run_sql($sql);
            }
          
            
             
         
            // Debug - new payment email notification for webmaster
            // Uncomment lines below and make any test payment
            // --------------------------------------------
            // $email = "....your email address....";
             mail($email, "Payment - " . $paymentID . " - " . $box_status, " \n Payment ID: " . $paymentID . " \n\n Status: " . $box_status . " \n\n Details: " . print_r($payment_details, true));
            return true;      
    }
    public function secret_key()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/all-key');
        $this->load->view('frontend/footer');
    }
    public function unrecognised_received_payments()
    {
        $data['country']=$this->Product_model->country();
        $this->load->view('frontend/header');
        $this->load->view('frontend/Payments_notconfirm',$data);
        $this->load->view('frontend/footer');
    }
    public function auto_payments_external_wallet()
    {
        $data['country']=$this->Product_model->country();
       
        $this->load->view('frontend/header');
        $this->load->view('frontend/Payments_confirm',$data);
        $this->load->view('frontend/footer');
    }
    public function payment_successfull()
    {
        $data['country']=$this->Product_model->country();
        $this->load->view('frontend/header');
        $this->load->view('frontend/Payments_Successfully',$data);
        $this->load->view('frontend/footer');
    }


}
