<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tiger5</title>

</head>

<body>

	<div style="width:550px; margin:0px auto; border:solid 1px #999; margin-top:20px;">
    	<table cellpadding="0" cellspacing="0" style="width:100%; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:normal; line-height:18px;">
        	<tr>
            	<td style="border-bottom:solid 1px #999; padding:10px;">
                	<img alt="Tiger Logo" src="<?php echo base_url()?>images/logo3.png">
                </td>
            </tr>    
            <tr>
                <td style="padding:0px 10px;">
                	<p>Dear <strong>Customer,</strong></p>
                    <p>You have received this mail because you filled out a form on Tiger indicating that you had forgotten your password</p>
                    
                    <p>Password: <?php echo $fld_customer_password;?> <!--Please click on the link below.<br /> <a href="#">http/www.sportsera.in/resetpwd.php?email=qs_manral@yahoo.com</a>--></p>
                    <!--<p>If a new window doesn’t open automatically please copy the URL below and paste it in your browser to manually complete the process. </p>  -->
                    <p>Thank you, <br />Warm Regards,</p> <p>Team <br /><strong>Tiger5</strong></p>
                </td>
            </tr>
        </table>
    </div>

</body>
</html>
