<style type="text/css">
    img{ margin-top: 20px; margin-left: 3px;}
    .panel{ margin-top: 30px; }
</style>

<style type="text/css">
        .right{float:right;width:100px;}
    </style> 
<div class="page-content-wrap">
    <div class="page-content-holder">
        <div class="block-heading this-animate" data-animate="fadeInDown">
            <h2>New Payment</h2>
            <div class="block-heading-text">
                
            </div>
        </div>
        <div class="row">
  <div class="navbar-header">
    <a class="navbar-brand" href="#">GoURL</a><br><br>
  </div>
  </div>
<div class="row">
     <div class="col-sm-12">
          <div style="padding-left: 25%;" class="offset-3 col-md-6 pull-left">

            <h3>Company Name</h3>
            <p>1433 17th St.<br>Denver CO 567875<br>Phone: (123) 4124324321<br>example@gmail.com</p>    <br><br>
          </div>
         <!--  <div class="col-md-6 pull-right">
            <div class="offset-col-md-2 col-md-10 pull-left">
            
          </div>
        </div> -->
        <div class="offset-md-6 col-md-6 pull-left">
            <br>
            <p ><b>Invoice</b>&nbsp; #45762</p>
            <p ><b>Email :</b><?php echo $email;?></p>
            <p  ><b> Date.</b>&nbsp; <?php echo date("l jS \of F Y h:i:s A");?></p>
            <h5>Company Name</h5>
            <p>1433 17th St.<br>
                Denver CO 567875<br>
                Phone: (123) 4124324321<br>
            example@gmail.com</p>
            <br><br>
        </div>
    </div>
  <div class="col-sm-12">
    <!-- <div class="col-md-3"></div> -->
    <div style="padding-left: 25%; padding-right: 25%;">
                <table class="table table-bordered">
                <thead style="background-color: #142929;color: white;">
                  <tr>
                    <th>Item</th>
                    <th>Description</th>
                    <th>Qty</th>
                     <th>Price</th>
                    <th>Amount</th>
                  </tr>
                    </thead>
                        <tbody>
                          <tr>
                            <td><b> Product</b></td>
                            <td>One Kind of Product Description</td>
                            <td>1.00</td>
                            <td>$1.15</td>
                            <td>$1.15</td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td><b> Product</b></td>
                            <td>One Kind of Product another Description</td>
                            <td>1.00</td>
                            <td>$1.30</td>
                            <td>$1.30</td>
                          </tr>
                        </tbody>
                        <tbody >
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                        <tbody >
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                        <tbody >
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><b>Subtotle:</b></td>
                            <td>$2.45</td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><b>Discount(10%):</b></td>
                            <td>($0.24)</td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><b>TOTAL DUE:</b> </td>
                            <td>$2.21</td>
                          </tr>
                        </tbody>
                </table>
            </div>
            <!-- <div col-md-3></div> -->
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-1">
                    <a href="<?php echo base_url();?>index.php/account/cryptocoin?multiCurrency=bitcoin">
                        <img src="<?php echo base_url();?>assets/images/bitcoin.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-sm-1">
                    <a href="<?php echo base_url();?>index.php/account/cryptocoin?multiCurrency=vertcoin">
                        <img src="<?php echo base_url();?>assets/images/vertcoin.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-sm-1">
                    <a href="<?php echo base_url();?>index.php/account/cryptocoin?multiCurrency=bitcoincash">
                        <img src="<?php echo base_url();?>assets/images/bitcoincash.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-sm-1">
                    <a href="<?php echo base_url();?>index.php/account/cryptocoin?multiCurrency=dash">
                        <img src="<?php echo base_url();?>assets/images/dash.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-sm-1">
                    <a href="<?php echo base_url();?>index.php/account/cryptocoin?multiCurrency=dogecoin">
                        <img src="<?php echo base_url();?>assets/images/dogecoin.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-sm-1">
                    <a href="<?php echo base_url();?>index.php/account/cryptocoin?multiCurrency=feathercoin">
                        <img src="<?php echo base_url();?>assets/images/feathercoin.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-sm-1">
                    <a href="<?php echo base_url();?>index.php/account/cryptocoin?multiCurrency=litecoin">
                        <img src="<?php echo base_url();?>assets/images/litecoin.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-sm-1">
                    <a href="<?php echo base_url();?>index.php/account/cryptocoin?multiCurrency=monetarycoin">
                        <img src="<?php echo base_url();?>assets/images/monetaryunit.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-sm-1">
                    <a href="<?php echo base_url();?>index.php/account/cryptocoin?multiCurrency=peercoin">
                        <img src="<?php echo base_url();?>assets/images/peercoin.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-sm-1">
                    <a href="<?php echo base_url();?>index.php/account/cryptocoin?multiCurrency=potcoin">
                        <img src="<?php echo base_url();?>assets/images/potcoin.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-sm-1">
                    <a href="<?php echo base_url();?>index.php/account/cryptocoin?multiCurrency=reddcoin">
                        <img src="<?php echo base_url();?>assets/images/reddcoin.png" width="100" height="100">
                    </a>
                </div>
                <div class="col-sm-1">
                    <a href="<?php echo base_url();?>index.php/account/cryptocoin?multiCurrency=speedcoin">
                        <img src="<?php echo base_url();?>assets/images/speedcoin.png" width="100" height="100">
                    </a>
                </div>
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
                               <a href="http://chart.apis.google.com/chart?cht=qr&chs=300x300&chl=<?php echo $address?>">
                                <img src="http://chart.apis.google.com/chart?cht=qr&chs=300x300&chl=<?php echo $address?>" 
                                alt="QR Code" style="width:60px;border:0;">
                            </a>
                            </div>
                            <div class="col-sm-8">
                                 1. Get <?php echo $coin;?> at bittrex.com if you don't already have any.<br>
                                2. <b>Send </b><?php echo $balance.' '.$coin;?> (don't include transaction fee in this amount!).
                                    If you send <b>any other bitcoincash amount</b>, payment system will <b>ignore it </b>!
                                <b>end 0.00087383 BCH (in ONE payment) to:</b>
                            </div>
                        </div>
                        <form action="<?php echo base_url();?>index.php/payment/key-secrat">
                        <div align="center" > 
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Copy</button>
                                <input type="text" style="margin-top: 20px; width:60%;" name="copy" disabled value="<?php echo $address;?>">
                        </div>
                        <div align="center"><input type="submit" style="margin-top: 20px; width:60%;" name="submit" value="Click Here if you have already sent <?php echo $coin;?> »  ">
                        </div>
                    </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
            

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Address:</h4>
      </div>
      <div class="modal-body">
            <input type="text" style="margin-top: 20px; width:100%;" name="copy" id="copy" value="<?php echo $address;?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>