
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
        include_once APPPATH.'third_party/jsonRPCClient.php';
        include_once APPPATH.'third_party/Client.php';
        ?>
        <!-- META SECTION -->
        <title>Atlant - Front-End Template</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/frontend/css/revolution-slider/extralayers.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/frontend/css/revolution-slider/settings.css" media="screen" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/frontend/css/styles.css" media="screen" />                  
        
    </head>
    <body>
 <div class="page-container">
            <div class="page-header">
                <div class="page-header-holder">
                    <div class="page-content">
                    <div class="col-sm-3">
                        <?php
                            $rpc_host = "104.219.251.147";
                            $rpc_user="EBTC147";
                            $rpc_pass="33Mj169rVg9d55Ef1QPt";
                            $rpc_port="8116";
                            echo $email=$this->session->userdata('email');
                            $client= new Client($rpc_host, $rpc_port, $rpc_user, $rpc_pass);
                            ?>
                    </div>
                      <div class="panel panel-default col-sm-6" style="margin-top: 50px;">
                        <div class="panel-heading">Total: <?php echo $balance; ?> BTC
                            <div class="pull-right"><img style="margin-top: -10px;" src="<?= base_url();?>;assets/images/payment.png" width="200" height="30">
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="col-sm-12 pull-lg-6">
                                
                                   <a href="http://chart.apis.google.com/chart?cht=qr&chs=300x300&chl=<?= $newaddress?>">
                                    <p class="text-center"><img src="http://chart.apis.google.com/chart?cht=qr&chs=300x300&chl=<?= $newaddress?>" 
                                    alt="QR Code" style="width:160px;border:0;"></p>
                                </a>
                               
                                
                            </div>
                            
                            <form action="<?= base_url()?>wallet/withdraw_value" method="post">
                                <div align="center" > 

                                    <a onclick=copy("<?= $newaddress?>"); class="btn btn-primary">Copy</a>
                                        <input type="text" style="margin-top: 20px; width:60%;" name="copy" disabled value="<?= $newaddress?>">
                                </div>
                                <div align="center" > 
                                    <label>Email:</label>
                                        <input type="email" style="margin-top: 20px; width:60%;" name="email">
                                        <input type="hidden" name="rate" value="<?php echo $rate; ?>">
                                        <input type="hidden" name="address" value="<?php echo $newaddress; ?>">
                                        <input type="hidden" name="bitcoin" value="<?php echo $boxname; ?>">
                                </div>
                               
                                <input type="hidden" name="email" value="<?php echo $this->session->userdata('email');?>">
                                <div align="center">
                                    <input class="btn btn-info" type="submit" style="margin-top: 20px; width:60%;" name="submit" value="Click Here if you have already sent <?= $coinLabel?>»">
                                </div>
                             </form>
                         </div>
                     </div>
                    <script>
                      
                      function copy($addr)
                      {
                        confirm($addr);
                      }
                    </script>
    
                    </div>
                    <!-- ./page footer holder -->
                </div>
                <!-- ./page footer wrap -->
                
            </div>
            <!-- ./page footer -->
            
        </div>        
        <!-- ./page container -->
        
        <!-- page scripts -->
        <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/plugins/bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/plugins/mixitup/jquery.mixitup.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/plugins/appear/jquery.appear.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/plugins/revolution-slider/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/plugins/revolution-slider/jquery.themepunch.revolution.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/actions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/slider.js"></script>
        <!-- ./page scripts -->

    <script type="text/javascript" src="<?php echo base_url();?>/assets/validation/dist/jquery.validate.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/cryptobox.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/cryptobox.min.js"></script>
       <script type="text/javascript" src="<?php echo base_url();?>/assets/country.js"></script>
       
        
    </body>
</html>






