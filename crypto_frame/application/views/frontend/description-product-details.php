<?php $this->load->view('frontend/headerfront');?> 

<div class="page-content-wrap bg-light">
    <div class="page-content-holder no-padding">
        <div class="page-title">
           
        </div>
    </div>
</div>
<div class="page-content-wrap">
    <div class="page-content-holder">
        <div class="block-heading this-animate" data-animate="fadeInDown">
             <div class="row">
                <div class="col-md-12">
               <?php foreach($getProduct as $product):?>
                    <div class="col-sm-3">
                      <h3><?= $product->productTitle;?></h3>
                        <img src="<?= base_url().'uploads/'.$product->image;?>" height="200" width="150">

                    </div>
                    <div class="col-sm-9">
                      <strong><?= $product->productTitle;?></strong> 
                      <p><img src="http://chart.apis.google.com/chart?cht=qr&chs=200x200&chl= 'BCH' Address=<?php echo $address;?>  Amount=<?php echo $price;?>" alt="QR Code" style="width:300px;border:0;"></p>
                      <div class="pull-left">
                     
                        
                      </div>
                      <div class="pull-right">
                        <button class="btn btn-info" onclick="window.history.back();">Back</button>
                      </div>
                    </div>
                 <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('frontend/footer');?>  
<script>
  $(document).ready(function() {
   $('#insert_add').click(function() {
        var price= $('#price').val();
        var order_id= $('#order_id').val();
        var boxtitle= $('#productTitle').val();
        //alert(DIV2+''+coinRate+''+boxId);
        $.ajax({
            url:"<?php echo base_url();?>multicurrency/add",
            data:{  name:boxtitle, price:price, box_id:order_id },
            success:function(data)
            {
                alert("Add BitCoin to cart");
                $('#details').html($data);
            }
        });
        
    });
  });
</script>