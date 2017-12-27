<?php $this->load->view('frontend/header');?>  
<style type="text/css"> 
    select{ width: 80% !important; margin-top: 20px; } 
    input{ width: 80% !important; margin-top: 20px; }
    .error{color: red;}
    label{  margin-top: 20px; }
    .error{color: red;}
</style>
    <!-- page content wrapper -->
    <div class="page-content-wrap bg-light">
        <!-- page content holder -->
        <div class="page-content-holder no-padding">
            <!-- page title -->
            <div class="page-title">                            
                <a class="btn btn-info" href="<?php echo base_url();?>/index.php/account/public_key">Create Public and Private key</a>
                
                <!-- breadcrumbs -->
                              
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
        <div class="page-content-holder">
            
            <div class="block-heading this-animate" data-animate="fadeIn">
                <h2>Update Key</h2><div class="pull-0"> <?php if(@$msg){ ?>
                    <div class="alert alert-success" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>Success!</strong> You have <?php echo @$msg;?> in successfully!
                    </div>
                    <div style="color: green; text-align: center;" class="success-alert" ><h4></h4></div>
                   <?php }?>
                </div>

                <div class="block-heading-text">
                    <?php foreach($allKey as $value){ ?>

                <form class="cmxform" id="commentForm" method="post" action="<?php echo base_url();?>index.php/account/update-security-coin">
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username"> Box Id:</label>
                    <div class="col-sm-5">
                        <input id="boxID" name="boxID"  type="text" required placeholder="Box Id" value="<?php echo  $value->boxID;?>"><br>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username"> Payment Box Name:</label>
                    <div class="col-sm-5">
                        <input id="boxName" name="boxName"  type="text" required placeholder="Box Name" value="<?php echo  $value->boxName;?>"><br>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-4 control-label" for="public">Public Key</label>
                    <div class="col-sm-5">
                       <input id="publicKey" type="text" name="publicKey" placeholder="Public Key" required value="<?php echo  $value->publicKey;?>">
                    </div><br>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="private">Private Key</label>
                    <div class="col-sm-5">
                       <input id="privateKey" type="text" name="privateKey" placeholder="Private Key" required value="<?php echo  $value->privateKey;?>">
                    </div><br>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="coin">Coin Name</label>
                    <div class="col-sm-5">
                       <select id="coinName" name="coinName" placeholder="Coin Name" required>
                            <
                            <option value='<?php echo  $value->coinName;?>><?php echo  $value->coinName;?> </option>
                            <option  value='bitcoin'> bitcoin</option>
                            <option  value='bitcoincash'> bitcoincash</option>
                            <option  value='litecoin'> litecoin</option>
                            <option  value='dash'> dash</option>
                            <option  value='dogecoin'> dogecoin</option>
                            <option  value='speedcoin'> speedcoin</option>
                            <option  value='reddcoin'> reddcoin</option>
                            <option  value='potcoin'> potcoin</option>
                            <option  value='feathercoin'> feathercoin</option>
                            <option  value='vertcoin'> vertcoin</option>
                            <option  value='peercoin'> peercoin</option>
                            <option  value='monetaryunit'> monetaryunit</option>
                       </select>
                    </div><br>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="boxType">Type of Payment Box:</label>
                    <div class="col-sm-5">
                       <select id="boxType" type="text" name="boxType" placeholder="Box Type" required>
                        <option value="<?php echo  $value->boxType;?>"> <?php echo  $value->boxType;?></option>
                        <option  value='paymentbox'> paymentbox</option>
                        <option  value='captchabox'> captchabox</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="password">Your External Wallet Address: </label>
                    <div class="col-sm-5">
                       <input id="isLockAddr" type="text" name="isLockAddr" placeholder="Your External Wallet Address" required value="<?php echo  $value->isLockAddr;?>"><br>
                    </div>
                </div>


                 <div class="form-group">
                    <label class="col-sm-4 control-label" for="password">Lock External Address Forever: </label>
                    <div class="col-sm-5">
                       <input id="isLockAddr" type="text" name="isLockAddr" placeholder="Lock External Address Forever" required value="<?php echo  $value->isLockAddr;?>"><br>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="password">Notification By Email:</label>
                    <div class="col-sm-5">
                       <input id="email" type="email" name="email" placeholder="Notification By Email:" required value="<?php echo  $value->email;?>"><br>
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="password">Callback URL: </label>
                    <div class="col-sm-5">
                       <input id="callbackUrl" type="text" name="callbackUrl" placeholder="Callback URL" required value="<?php echo  $value->callbackUrl;?>"><br>
                    </div><br>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="password">Use on Adult/Gambling Website ? </label>
                    <div class="col-sm-5">
                        <?php if($value->isAdult){ ?>
                       <input id="isAdult" style="margin-left: 0px; max-width: 0%;" type="radio" name="isAdult" value="<?php echo  $value->isAdult;?>">No
                      
                       <?php } else { ?>
                        <input id="isAdult" style="margin-left: 0px; max-width: 0%;" type="radio" name="isAdult" value="<?php echo  $value->boxID;?>">Yes
                       <?php } ?>

                       <!-- hidden fields -->
                       <input type='hidden' id='isAdult_exst' name='isAdult_exst' value="<?php echo  $value->isAdult;?>">
                       <input type='hidden' id='start_time' name='start_time' value="<?php echo  $value->start_time;?>">
                       <input type='hidden' id='user_id' name='user_id' value="<?php echo  $value->user_id;?>">
                       <input type='hidden' id='key_id' name='key_id' value="<?php echo  $value->key_id;?>">
                    </div><br>

                </div>
                <div class="form-group">
                    <div class="col-sm-3 col-sm-offset-1">
                       <input class="btn btn-info" type="submit" value="Submit">
                    </div>
                </div>
                   <?php }?>
                    </form>
                </div>
            </div>
                                                     
            
        </div>
        <!-- ./page content holder -->
    </div>
    <!-- ./page content wrapper -->
                    
</div>
<!-- ./page content -->
<script type="text/javascript">
window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 4000);
</script>

<?php $this->load->view('frontend/footer');?>  