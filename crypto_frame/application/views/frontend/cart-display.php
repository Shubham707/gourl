 <?php $this->load->view('frontend/headerfront');?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/calender/css/jquery.datepicker.css">
<style type="text/css"> 
    select{ width: 80% !important; margin-top: 20px; } 
    input{ width: 80% !important; margin-top: 20px; }
    textarea{ width: 80% !important; margin-top: 20px; }
    .error{color: red;}
    label{ margin-top: 20px; }
 
.active { font-weight:bolder; }
.realperson-challenge { display: inline-block }
ul li #DIV2 {
    left: 5px;
    top: -29px;
    margin-top: -11px;
    width: 85px !important;
    height: 100px;
    border: 1px solid white;
    position: absolute;
    z-index: 0;
    opacity: 0.3;
    float: left !important;
}
ul li input #DIV3 {
    left: 5px;
    top: -29px;
    margin-top: -11px;
    width: 85px !important;
    height: 100px;
    border: 1px solid white;
    position: absolute;
    z-index: 0;
    float: left !important;
}

img{ margin-top: 30px; }
.nav>li {
    position: relative;
    display: inline;
}
</style>

 <div class="page-content-wrap bg-light">
    <div class="page-content-holder no-padding">    
        <div class="page-title">                            
            <h1>Welcome Shubham</h1> 
        </div>
    </div>
</div>
<div class="page-content-wrap bg-light">
    <div class="page-content-holder no-padding">
        <div class="page-title">                            
            <a class="btn btn-info" href="<?php echo base_url();?>welcome/account"> Your Persional Detail</a> 
            <a class="pull-right btn btn-info" href="<?php echo base_url();?>multicurrency"> Add Payment Cart</a> &nbsp;
               <a class="btn btn-info pull-right" href="<?php echo base_url();?>multicurrency/remove"> All Remove Cart</a>           
        </div>
    </div>
</div>          
<div class="page-content-wrap">                    

    <div class="page-content-holder">
        <div id="hide" style="color: green; text-align: center;"> <?php echo @$success;?></div>
        <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
            <h2 class="heading-underline">Book Coin List</h2>
            <div class="block-heading-text">
               
            </div>
            <div class="page-content-wrap bg-light">
                <?php echo form_open(base_url().'multicurrency/pay_go_url'); ?>
                <table cellpadding="6" cellspacing="1" style="width:100%" border="0">
                <tr>
                        <th>QTY</th>
                        <th>Item Description</th>
                        <th style="text-align:right">Item Price</th>
                        <th style="text-align:right">Sub-Total</th>
                </tr>
                <?php $i = 1; 
                $cart=$this->cart->contents();
                ?>
                <?php foreach ($this->cart->contents() as $items): ?>

                    <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                    <tr>
                        <td>
                        <?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); 
                                    ?>
                                        
                        </td>
                        <td>
                            <?php echo $items['name']; ?>

                            <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                            <p>
                            <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                            <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                            <?php endforeach; ?>
                             </p>

                             <?php endif; ?>

                        </td>   
                        <td style="text-align:right">
                        <?php echo $this->cart->format_number($items['price']); ?>  
                        </td>
                        <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?>
                        </td>
                        </tr>

                <?php $i++; ?>

                <?php endforeach; ?>

                <tr>
                        <td colspan="2"> </td>
                        <td class="right"><strong>Total</strong></td>
                        <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
                </tr>

                </table>

                <p><?php echo form_submit('', 'Pay your Cart'); ?></p>

             </div>
        </div>
        
    </div>

</div>

</div>

</script>
<?php $this->load->view('frontend/footer');?>  