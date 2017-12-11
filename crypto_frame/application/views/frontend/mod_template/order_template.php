<!doctype html>



<html>



<head>



<meta charset="utf-8">



<meta name="viewport" content="width=device-width, initial-scale=1.0"/>



<title>E-mailer</title>



</head>



<body style="margin:0; padding:0; font-family:Arial, sans-serif; font-size:12px;">



	<div style="max-width:840px; width:100%; margin:0 auto; padding:10px;">



    	<div class="headers" style="padding:10px;">



            <table style="width:100%" cellpadding="0" cellspacing="0">



                <tr>



                    <td><span style="float:left;"><a href="<?php echo base_url();?>"><img style="width:50%;" src="<?php echo base_url();?>assets/images/logo.png"></a></span></td>



                    <td><span style="float:right;"><a style="color:#333; text-decoration:none;" href="#">Track Order</a> | <a style="color:#333; text-decoration:none;" href="#">My Account</a></span></td>



                </tr>



                <tr>



                    <td colspan="2" style="border-bottom:#333 solid 3px;"><span></span></td>



                </tr>



                <tr>



                    <td colspan="2"><span style="float:right; margin-top:5px;"><strong style="color:#bb1f23;">Order Confirmed</strong></span></td>



                 </tr>



                <tr>



                    <td colspan="2"><span style="float:right; font-size:11px;"><strong>Order No.:</strong> <?php echo $order_no;?></span></td>



                </tr>



            </table>



        </div>   



		<div class="cont-body" style="padding:10px;">



        	<div>



            	<strong>Dear <?php echo ucwords($customer_name);?>,</strong>



                <p>Your order with order number <?php echo $order_no;?> containing <?php echo count($order_mail_datarecord);?> items has been confirmed and is now being processed. The items will be shipped once ready. We'll send tracking details over SMS and email once the items are dispatched.</p>



                <p>In case of any queries please go through our <a href="#">FAQs</a> section or <a href="#">Contact us</a> if you need further help.</p>



                <p>Once placed, an order cannot be modified, i.e. addition or removal of an item or a change in the delivery date will not be possible.</p>



            </div>



        </div>



		<div class="orderDetails" style="margin-top:10px; padding:10px;">

        	<div style="background:#f1f1f1; padding:10px;">

                <table>

                    <tr>

                        <td>

                            <strong style="color:#bb1f23;">Order Details</strong>

            

                            <p style="color:#999"><strong>Order No.:</strong> <?php echo $order_no;?></p>

            

                            <p style="color:#999"><strong>Payment Mode:</strong> <?php echo $payment_mode;?></p>
                             <p style="color:#999"><strong>Payment Name:</strong> <?php echo $fld_payment_name;?></p>
                          

            

                            <!--<p style="color:#999"><strong>Expected Delivery Date:</strong> Mon, 02 Nov 2015</p>-->

                            <a style="padding:5px 10px; background:#bb1f23; color:#fff; text-decoration:none;" href="#">Track Order</a>

                        </td>

                        <td>

                            <strong style="color:#bb1f23;">Delivery Details</strong>

                             <p style="color:#999"><?php echo $ship_address['fld_shipping_name'];?>,</p>

                             <p style="color:#999"><?php echo $ship_address['fld_shipping_address'];?>,</p>

                             <p style="color:#999"><?php echo $ship_address['fld_shipping_city'];?>,</p>

                             <p style="color:#999"><?php echo $ship_address['fld_shipping_pincode'];?></p>
                            

                        </td>

                    </tr>

                </table>

            </div>

         </div>     



        <div class="itemDetails" style="padding:10px;"> 



            <table style="width:100%; padding-bottom:5px; border-bottom:#ccc solid 1px;" cellpadding="0" cellspacing="0">



				<tr>



                	<td colspan="4"><strong style="color:#bb1f23;">Items In Your Order</strong></td>



                 </tr>



            	<tr>



                	<td colspan="4" style="border-bottom:#333 solid 2px;">&nbsp;</td>



                </tr>



            	<tr>



                	<th>SKU No.</th>



                	<th>Product Name</th>



                	<th>Quantity</th>



					<th>Price</th>



                </tr>



            	<?php $total=''; for($i=0; $i<count($order_mail_datarecord); $i++){ ?>



                <tr>



                	<td><p><strong><?php echo $order_mail_datarecord[$i]['fld_product_sku'];?></strong></p></td>



                	<td><p><strong><?php echo $order_mail_datarecord[$i]['fld_product_name'];?></strong></p></td>



                	<td><?php echo $order_mail_datarecord[$i]['fld_order_quantity'];?></td>



					<td><?php echo number_format($order_mail_datarecord[$i]['fld_order_price'],2);?></td>



					<?php $total+=$order_mail_datarecord[$i]['fld_order_price'] * $order_mail_datarecord[$i]['fld_order_quantity'];?>



                </tr>



            	<?php }?>



				<tr>



                	<td colspan="3"><p>Total</p></td>



                	<td><strong>Rs.<?php echo number_format($total,2);?></strong></td>



                 </tr>



				 <?php if(@$shipping_charge!='0'){?>



				 <tr>



                	<td colspan="3"><p>Shipping Charges</p></td>



                	<td><strong>Rs.<?php echo number_format(@$shipping_charge,2);?></strong></td>



                 </tr>



				 <?php }?>



				 <?php if(@$coupan_code!=''){



				 		$discount=$total*@$coupan_discount/100;



				 ?>



				 <tr>



                	<td colspan="3"><p>Discount</p><br>Applied Code <?php echo $coupan_code;?></td>



                	<td><strong>Rs.<?php echo number_format($discount,2);?></strong></td>



                 </tr>



				 <?php }?>



				 <tr>



                	<td colspan="3"><p>Grand Total</p></td>



                	<td><strong>Rs.<?php echo number_format($total-@$discount+@$shipping_charge,2);?></strong></td>



                 </tr>



            </table> 



        </div>



        <div style="padding:10px;"><p>Thank you for shopping with us Team <strong>Tiger</strong></p></div>



    </div>



</body>



</html>



