<!doctype html>

<html>

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<title>E-mailer</title>

</head>

<body style="margin:0; padding:0; font-family:Arial, sans-serif; font-size:12px; color:#fff; background:#424242;">



	<div style="max-width:600px; width:100%; margin:0 auto; padding:10px; background:#424242;">
    <br>
    	<table width="100%" cellspacing="10px;" cellpadding="0px;" style="background:#424242; text-align:center; font-family:Arial, sans-serif;">
        	<tr>
            	<td><img src="<?php echo base_url();?>images/logo.png" style="width:20%" /></td>
            </tr>
			<tr>
            	<td style="font-size:32px; color:#dd3428;"><?php if($payment_mode=='Cancel by User'){ echo 'Failed';}else{echo 'Congratulations';}?> <?php echo ucwords($customer_name);?>!</td>
            </tr>
            <tr>
            	<td style="font-size:16px;">Your booking has been <?php if($payment_mode=='Cancel by User'){ echo $payment_mode;}else{echo 'confirmed';}?></td>
            </tr>
        </table>
        <br><br>
        <table width="90%" cellspacing="20px;" cellpadding="0px;" style="background:#424242; text-align:left; margin:0 auto; font-family:Arial, sans-serif;">
        	<tr>
            	<td style="font-size:18px;" width="50%">Order Details</td>
                <td style="font-size:18px;" width="50%">Customer Details</td>
            </tr>
            
            
            
            <tr>
            	<td style="font-size:13px; line-height:24px;">Order No. : <span style="color:#dd3428;"><?php echo $order_no;?></span><br> Payment Mode : <span style="color:#dd3428;"><?php echo $payment_mode;?></span> <!--<br>Payment Name : <span style="color:#dd3428;"><?php //echo $fld_payment_name;?></span>--></td>
                <td style="font-size:13px; vertical-align:baseline; line-height:22px;">
					<?php echo ucwords($billing_address['fld_customer_name']);?><br />
					<?php //echo ucwords($billing_address['fld_customer_address']);?>
					<?php //echo ucwords($billing_address['fld_city_id']).','.$state;?>
					<?php //echo $billing_address['fld_customer_pincode'];?>
					<?php echo $billing_address['fld_customer_mobile'];?>
					
				</td>  
            </tr>
            <tr><td colspan="2"> <hr></td></tr>
            <tr>
           
            	<td colspan="2" style="font-size:18px; text-align:center"><br />Items In Your Order</td>
                
            </tr>
            
            
        </table>
        
        <table width="90%" cellspacing="20px;" cellpadding="0px;" style="background:#424242; text-align:left; margin:0 auto; font-family:Arial, sans-serif;">
        	<tr><td><hr></td></tr>
        </table>
        
        <?php $total=''; for($i=0; $i<count($order_mail_datarecord); $i++){ ?>
        <table width="90%" cellspacing="20px;" cellpadding="0px;" style="background:#424242; text-align:left; margin:0 auto; font-family:Arial, sans-serif;">
        	<tr>
            	<td style="font-size:18px;" width="50%">Schedule Date</td>
                <td style="font-size:18px;" width="50%">Ground Type</td>
            </tr>
            <tr>
            	<td style="font-size:13px; line-height:24px; vertical-align:baseline; color:red; text-decoration:none;"><?php echo $order_mail_datarecord[$i]['fld_product_name'];?></td>
                <td style="font-size:13px; vertical-align:baseline; line-height:22px;"><?php echo $this->MRcat->getRcat($order_mail_datarecord[$i]['ground_type'])->row()->fld_rcat_name;?></td>  
            </tr>
            
            <tr>
            	<td style="font-size:18px;" width="50%">Timeslot</td>
                <td style="font-size:18px;" width="50%">Amount</td>
            </tr>
            <tr>
            	<td style="font-size:13px; line-height:24px; vertical-align:baseline; color:red; text-decoration:none;">
					<?php 
							$ss=explode(',',$order_mail_datarecord[$i]['timeslot']);
								
							for($m=0;$m<count($ss);$m++)
							{
								echo $this->MBrand->getBrand($ss[$m])->row()->fld_brand_name;
								echo '<br>';
							}
					?>
				</td>
                <td style="font-size:18px; vertical-align:baseline; line-height:22px;">Rs. <?php echo number_format((count($ss) * $order_mail_datarecord[$i]['order_price']),2);?></td>  
            </tr>
           
        </table>
		<?php $total+=count($ss) * $order_mail_datarecord[$i]['order_price']; }?>
        



    </div>



</body>



</html>



