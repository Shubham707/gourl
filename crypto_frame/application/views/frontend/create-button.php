<?php $this->load->view('frontend/header');?>
<div class="col-sm-3"></div>
  <div class="panel panel-default col-sm-6">
    <div class="panel-heading">Total: <?php echo $balance; ?> BCH (BCC)
        <div class="pull-right"><img style="margin-top: -10px;" src="<?= base_url();?>;assets/images/payment.png" width="200" height="30">
        </div>
    </div>
    <div class="panel-body">
        <form action="<?= base_url()?>wallet/add-payment-wallet-data-withdraw-all-value" method="post">
            <div align="center"> 
                <a onclick=copy("<?= $newaddress?>"); class="btn btn-primary">Copy</a>
                    <input type="text" style="margin-top: 20px; width:60%;" name="copy" disabled value="<?= $newaddress?>">
            </div>
            
            <input type="hidden" name="id" value="<?= $id?>">
            <input type="hidden" name="privateURL" value="<?= $privateURL?>">
            <input type="hidden" name="privateText" value="<?= $privateText?>">
            <input type="hidden" name="publicTitle" value="<?= $publicTitle?>">
            <input type="hidden" name="walletAddress" value="<?= $walletAddress?>">
            <input type="hidden" name="expiryDate" value="<?= $expiryDate?>">
            <input type="hidden" name="boxId" value="<?= $boxId?>">
            <input type="hidden" name="coinLabel" value="<?= $coinLabel?>">
            <input type="hidden" name="" value="<?= $newaddress?>">
           
            
            <div align="center">
               <!--  <input class="btn btn-info" type="submit" style="margin-top: 20px; width:60%;" name="submit" value="<?= $coinLabel?>"> -->
               <input type="image" name="submit" src="<?= base_url();?>assets/images/images1.jpeg" height="100" width="130" border="0" alt="Submit" />
            </div>
         </form>
          <div align="center">
                <textarea class="form-control" rows="10" cols="40">
                    <form action="<?= base_url()?>wallet/add-payment-wallet-data-withdraw-all-value" method="post">
                        <input type="hidden" name="id" value="<?= $id?>">
                        <input type="hidden" name="privateURL" value="<?= $privateURL?>">
                        <input type="hidden" name="privateText" value="<?= $privateText?>">
                        <input type="hidden" name="publicTitle" value="<?= $publicTitle?>">
                        <input type="hidden" name="walletAddress" value="<?= $walletAddress?>">
                        <input type="hidden" name="coinRate" value="<?php echo $coinRate;?>">
                        <input type="hidden" name="expiryDate" value="<?= $expiryDate?>">
                        <input type="hidden" name="boxId" value="<?= $boxId?>">
                        <input type="hidden" name="coinLabel" value="<?= $coinLabel?>">
                        <input type="hidden" name="newaddress" value="<?= $newaddress?>">
                        <div align="center">
                        <input type="image" name="submit" src="<?= base_url();?>assets/images/images1.jpeg" height="100" width="130" border="0" alt="Submit" />
                    </div>
                    </form>
                </textarea>
            </div>
     </div>
 </div>
<script>
  function copy($addr)
  {
    confirm($addr);
  }
</script>
  
<?php $this->load->view('frontend/footer');?>