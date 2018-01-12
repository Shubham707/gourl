<?php $this->load->view('frontend/headerfront');?> 

                <style type="text/css">
        .web_dialog_overlay
        {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
            background: #000000;
            opacity: .15;
            filter: alpha(opacity=15);
            -moz-opacity: .15;
            z-index: 101;
            display: none;
        }
        .web_dialog
        {
            display: none;
            position: fixed;
            width: 380px;
            height: 200px;
            top: 50%;
            left: 50%;
            margin-left: -190px;
            margin-top: -100px;
            background-color: #ffffff;
            border: 2px solid #336699;
            padding: 0px;
            z-index: 102;
            font-family: Verdana;
            font-size: 10pt;
        }
        .web_dialog_title
        {
            border-bottom: solid 2px #336699;
            background-color: #336699;
            padding: 4px;
            color: White;
            font-weight:bold;
        }
        .web_dialog_title a
        {
            color: White;
            text-decoration: none;
        }
        .align_right
        {
            text-align: right;
        }
    </style>
                <!-- page content wrapper -->
                <div class="page-content-wrap bg-light">
                    <!-- page content holder -->
                    <div class="page-content-holder no-padding">
                        <!-- page title -->
                        <div class="page-title">                            
                            <h1>Prices</h1>
                            <!-- breadcrumbs -->
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">Prices</li>
                            </ul>               
                            <!-- ./breadcrumbs -->
                        </div>
                        <!-- ./page title -->
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                
                               
                <!-- page content wrapper -->
                <div class="page-content-wrap">                    
                    <!-- page content holder -->
                    <div class="page-content-holder padding-v-30">

                        <div class="row">
                            <div class="col-md-3">
                                
                                <div class="pricing-block">                                    
                                    <div class="pb-block">
                                        <h3>Free</h3>
                                        <p>Proin luctus nulla fringilla massa euismod commodo. Donec sit amet elementum libero.</p>
                                    </div>
                                    <div class="pb-price">
                                        FREE
                                    </div>
                                    <div class="pb-block">                                    
                                        <p><span class="fa fa-check"></span> Donec sit amet</p>
                                        <p><span class="fa fa-check"></span> Curabitur ut lorem</p>
                                        <p><span class="fa fa-times text-danger"></span> Lorem ipsum dolor</p>
                                        <p><span class="fa fa-times text-danger"></span> Praesent facilisis tellus </p>
                                        <p><span class="fa fa-times text-danger"></span> Curabitur non venenatis</p>
                                        <p><span class="fa fa-times text-danger"></span> Donec quis mattis est</p>
                                    </div>
                                    <div class="pb-block">
                                        <button class="btn btn-primary btn-block">Sing In</button>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-3">
                                
                                <div class="pricing-block active">                                    
                                    <div class="pb-block">
                                        <h3>Premium</h3>
                                        <p>Proin luctus nulla fringilla massa euismod commodo. Donec sit amet elementum libero.</p>
                                    </div>
                                    <div class="pb-price">
                                        <span>$</span> 19 <span>/ per month</span>
                                    </div>
                                    <div class="pb-block">                                    
                                        <p><span class="fa fa-check"></span> Donec sit amet</p>
                                        <p><span class="fa fa-check"></span> Curabitur ut lorem</p>
                                        <p><span class="fa fa-check"></span> Lorem ipsum dolor</p>
                                        <p><span class="fa fa-check"></span> Praesent facilisis tellus </p>
                                        <p><span class="fa fa-check"></span> Curabitur non venenatis</p>
                                        <p><span class="fa fa-check"></span> Donec quis mattis est</p>
                                    </div>
                                    <div class="pb-block">
                                        <button class="btn btn-primary btn-block">Sing In</button>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-3">
                                
                                <div class="pricing-block">                                    
                                    <div class="pb-block">
                                        <h3>Beginer</h3>
                                        <p>Proin luctus nulla fringilla massa euismod commodo. Donec sit amet elementum libero.</p>
                                    </div>
                                    <div class="pb-price">
                                        <span>$</span> 8 <span>/ per month</span>
                                    </div>
                                    <div class="pb-block">                                    
                                        <p><span class="fa fa-check"></span> Donec sit amet</p>
                                        <p><span class="fa fa-check"></span> Curabitur ut lorem</p>
                                        <p><span class="fa fa-check"></span> Lorem ipsum dolor</p>
                                        <p><span class="fa fa-times text-danger"></span> Praesent facilisis tellus </p>
                                        <p><span class="fa fa-times text-danger"></span> Curabitur non venenatis</p>
                                        <p><span class="fa fa-times text-danger"></span> Donec quis mattis est</p>
                                    </div>
                                    <div class="pb-block">
                                        <button class="btn btn-primary btn-block">Sing In</button>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-3">
                                
                                <div class="pricing-block">                                    
                                    <div class="pb-block">
                                        <h3>Medium</h3>
                                        <p>Proin luctus nulla fringilla massa euismod commodo. Donec sit amet elementum libero.</p>
                                    </div>
                                    <div class="pb-price">
                                        <span>$</span> 12 <span>/ per month</span>
                                    </div>
                                    <div class="pb-block">                                    
                                        <p><span class="fa fa-check"></span> Donec sit amet</p>
                                        <p><span class="fa fa-check"></span> Curabitur ut lorem</p>
                                        <p><span class="fa fa-check"></span> Lorem ipsum dolor</p>
                                        <p><span class="fa fa-check"></span> Praesent facilisis tellus </p>
                                        <p><span class="fa fa-times text-danger"></span> Curabitur non venenatis</p>
                                        <p><span class="fa fa-times text-danger"></span> Donec quis mattis est</p>
                                    </div>
                                    <div class="pb-block">
                                        <button class="btn btn-primary btn-block">Sing In</button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                            <div class="row">
                <div class="col-sm-12">
                    <?php foreach ($allData as $key => $value) { ?>
                     
                    <div class="col-sm-1">
                        <a href="<?php echo base_url();?>membership/cryptocoin/<?= $value->coin_name;?>/<?= $this->session->userdata('box_id');?>">
                            <img src="<?php echo base_url();?>uploads/<?= $value->coin_image;?>" width="100" height="100">
                        </a>
                    </div>
                    <?php    } ?>
                </div>
                <div class="col-sm-12">
                     <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Total: 0.00087383 BCH (BCC)
                                <div class="pull-right"><img style="margin-top: -10px;" src="<?php echo base_url();?>assets/images/payment.png" width="200" height="30">
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-12">
                                    <div class="col-sm-3">
                                       <a href="http://chart.apis.google.com/chart?cht=qr&chs=300x300&chl=<?php echo $newAddress;?>">
                                        <img src="http://chart.apis.google.com/chart?cht=qr&chs=300x300&chl=<?php echo $newAddress;?>" 
                                        alt="QR Code" style="width:60px;border:0;">
                                    </a>
                                    </div>
                                    <div class="col-sm-8">
                                         1. Get <?php echo $coin ;?> at bittrex.com if you don't already have any.<br>
                                        2. <b>Send </b><?php echo $balance.' '.$coin;?> (don't include transaction fee in this amount!).
                                            If you send <b>any other bitcoincash amount</b>, payment system will <b>ignore it </b>!
                                        <b>end 0.00087383 BCH (in ONE payment) to:</b>
                                    </div>
                                </div>
                                <form action="<?php echo base_url();?>payment/key-secrat" method="post">
                                    <div align="center" > 
                                       <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Copy</button> -->
                                      <a class="btn btn-info" onclick="myFunction('<?php echo @$newAddress;?>')">Copy</a>
                                            <input type="text" style="margin-top: 20px; width:60%;" name="copy" disabled value="<?php echo @$newAddress;?>">
                                    </div>
                                    <div align="center"><input type="submit" style="margin-top: 20px; width:60%;" name="submit" value="Click Here if you have already sent <?php echo $coin;?> »  ">
                                    </div>
                                 </form>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                                
            </div>
            <!-- ./page content -->
<script>
function myFunction(copy) {
    if (confirm(copy) == true) {
        txt="";
    }
}
</script>
<?php $this->load->view('frontend/footer');?>  
