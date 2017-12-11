<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tiger</title>

</head>

<body>

	<div style="width:550px; margin:0px auto; border:solid 1px #999; margin-top:20px;">
    	<table cellpadding="0" cellspacing="0" style="width:100%; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:normal; line-height:18px;">
        	<tr>
            	<td colspan="2" style="border-bottom:solid 1px #999; padding:10px; text-align:center;">
                	<img alt="Tiger Logo" src="<?php echo base_url()?>/images/logo.png">
                </td>
            </tr>    
            <tr>
                <td colspan="2" style="padding:0px 10px; border-bottom:solid 1px #999;">
                	<p style="text-align:center; color:#999; font-weight:bold;">Hi <?php echo $ship_address['fld_shipping_name'];?></p>
<p style="text-align:center; color:#999; font-weight:bold;">Your <?php echo $product_name;?> is on its way</p>

					<p style="">We've packed it with care and shipped it through our courier. 
					<!--It will reach you between
					Wed, 23 Dec, 2015 - Sun, 27 Dec, 2015--></p>

                </td>
            </tr>
            
            <tr>
                <td style="padding:10px 10px;">
                	Order ID: <span style="color:#00bbe6;"><?php echo $order_no;?></span>
                </td>
                <td style="padding:10px 10px;">
                	Placed on, <?php echo date('d-m-Y');?>
                </td>
            </tr>
            
            <tr>
                <td style="padding:10px 10px;">
                	<img alt="Tiger Logo" src="<?php echo base_url()?>/images/calender-icon.png"> Estimated Delivery<br />
					<!--23 Dec - 27 Dec-->
					Within Working Days<br />
					<?php echo !empty($logistic_name)?'Logistic: '.$logistic_name.'<br />':'';?>
					<?php echo !empty($logistic_docket)?'Docket No.: '.$logistic_docket.'<br>':'';?>
					<?php echo !empty($logistic_remarks)?$logistic_remarks:'';?>
                </td>
                <td style="padding:10px 10px;">
                	<img alt="Tiger Logo" src="<?php echo base_url()?>/images/home-icon.png"> Delivery Address<br />
                    <strong><?php echo $ship_address['fld_shipping_name'];?></strong><br />
                     <?php echo $ship_address['fld_shipping_address'];?><br />
					 
                </td>
            </tr>
            <tr>
                <td style="padding:10px 10px;">
                	
                </td>
                <td style="padding:10px 10px;">
                	
                    <?php echo $ship_address['fld_shipping_city'].','.$ship_address['fld_shipping_state'];?> - <?php echo $ship_address['fld_shipping_pincode'];?><br />
					
                </td>
            </tr>
            
            <tr>
                <td style="padding:10px 10px;">
                	<img alt="Tiger Logo" src="<?php echo base_url()?>/images/mobile-icon.png"> Phone Number<br />
					<?php echo $ship_address['fld_shipping_mobile'];?>
                </td>
                <td style="padding:10px 10px;">
                    <img alt="Tiger Logo" src="<?php echo base_url()?>/images/rupee-icon.png"> You Pay<br />
					Rs. <?php echo $payment;?>
                </td>
            </tr>
            
            
            
            
            

            <?php if($logistic_link!=''){?>
            <tr>
            	<td colspan="2" style="padding:10px 10px;">
                	<div style="border:solid 1px #00bbe6; padding:6px; text-align:center; width:100px; margin:0px auto; color:#333;"><a href="<?php echo $logistic_link;?>" style="color:#333; text-decoration:none;">Track My Order</a></div>
                </td>
            </tr>
			<?php }?>
        </table>
    </div>

</body>
</html>
