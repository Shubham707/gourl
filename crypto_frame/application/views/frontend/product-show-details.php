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
                     <a href="<?= base_url();?>product/product-description/<?= $product->productTitle.'/'.$product->order_id.'/'.$product->priceUSD;?>"> 
                        <img src="<?= base_url().'uploads/'.$product->image;?>" height="200" width="150"></a>
                      <p>Description: <?= substr($product->emailUserBody,0,50);?><a href="<?= base_url();?>product/product-description/<?= $product->productTitle.'/'.$product->order_id;?>"> Read More...</a>
                      </p>
                      <p style="color: green">Price: $<?= $product->priceUSD;?></p>
                      <p>
                        <a class="btn btn-info" href="<?= base_url();?>product/product-description/<?= $product->productTitle.'/'.$product->order_id.'/'.$product->priceUSD;?>"> <svg class="_3oJBMI" width="16" height="16" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg" data-reactid="85"><path class="" d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86" fill="#fff" data-reactid="86"></path></svg> Buy Now</a>
                      </p>
                    </div>
                 <?php endforeach;?>
                  

                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('frontend/footer');?>  