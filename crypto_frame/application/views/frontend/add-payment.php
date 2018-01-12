<?php $this->load->view('frontend/headerfront');?>  
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
         <?php echo $invoice;?>
          </div>
            <div class="row">
                <div class="col-sm-12">
                    <?php foreach ($allData as $key => $value) { ?>
                     
                    <div class="col-sm-1">
                        <a href="<?php echo base_url();?>index.php/account/cryptocoin/<?= $value->coin_name;?>/<?= $this->session->userdata('box_id');?>">
                            <img src="<?php echo base_url();?>uploads/<?= trim($value->coin_image,' ');?>" width="100" height="100">
                        </a>
                    </div>
                    <?php    } ?>
                </div>
                <div class="col-sm-12">
                     <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                                <?php echo @$result;?>
                            </div>
                </div>
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