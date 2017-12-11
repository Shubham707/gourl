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
            	<td colspan="2" style="border-bottom:solid 1px #999; padding:10px;">
                	<img alt="Tiger Logo" src="<?php echo base_url()?>/images/logo.png">
                </td>
            </tr>
            <tr>
            	<td colspan="2" style="padding:0px 10px;">
                	<p>Dear <strong>Mr. <?php echo $vendor_name;?>,</strong></p>
                    <!--<p>We have received an order of <strong>‘Nike Roger Federer Unisex Solid’</strong><br />
                       Oeder Details are:<br />
                       Order ID: <span style="color:#00bbe6;">OIDSE76DABC</span><br />
                       Order Date: <span style="color:#00bbe6;">2015-12-17</span>
                       
                    </p>
-->                </td>
            </tr>
             <tr>
            	<td style="padding:10px 10px 5px;">
                	Payment Type: <?php echo $payment_type;?>
                </td>
                <td style="padding:10px 10px 5px;">
                	Payment Date: <?php echo $payment_date;?>
                </td>
             </tr>
             <tr>
            	<td style="padding:0px 10px 10px; border-bottom:solid 1px #999;">
                	Cheque/NEFT/RTGS No. : <?php echo $transaction_no;?>
                </td>
                <td style="border-bottom:solid 1px #999; padding:0px 10px 10px;">
                	Credited Amount: Rs. <?php echo $payment_amt;?>
                </td>
             </tr>   
             


            <!-- 
            <tr>
            	<td colspan="2" style="border-bottom:solid 1px #999; padding:0px 10px;">
                	<p>Order Summry</p>
                </td>
            </tr>
            <tr>
            	<td colspan="2">
                	<table cellpadding="0" cellspacing="0" style="width:100%; text-align:left; padding:5px 10px;">
                      <tr>
                        <th style="padding:5px 0px;">S.no.</th>
                        <th>Item Name</th>
                        <th>Item Image</th>
                        <th>Quantity</th>
                        <th>Price</th>
                      </tr>
                      <tr>
                        <td style="padding:10px 10px 5px; border-bottom:dashed 1px #ccc;">1</td>
                        <td style="border-bottom:dashed 1px #ccc;">Nike Roger Federer Unisex Solid</td>
                        <td style="border-bottom:dashed 1px #ccc;"><img alt="Sportsera Logo" width="50px" height="20px" src="http://www.sportsera.com/images/logo.png"></td>
                        <td style="border-bottom:dashed 1px #ccc;">1</td>
                        <td style="border-bottom:dashed 1px #ccc;">1399</td>
                        
                      </tr>
                     
                      <tr>
                        <td style="padding:5px 10px;">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>Total Amount</td>
                        <td>1399</td>
                      </tr>
                      <tr>
                        <td style="padding:5px 10px;">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>Shipping Charge : </td>
                        <td>0</td>
                      </tr>
                      <tr bgcolor="#d1d4d1">
                        <td style="padding:5px 10px;">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><strong>Paid Amount :</strong> </td>
                        <td><strong>Rs.1,399.00</strong></td>
                      </tr>
                    </table>

                </td>
            </tr>-->

            <tr>
                <td colspan="2" style="padding:0px 10px; border-top:solid 1px #999;">
                	
                    <p>Thank you, <br />Warm Regards,</p> <p>Team <br /><strong>Tiger</strong></p>
                </td>
            </tr>
        </table>
    </div>

</body>
</html>


