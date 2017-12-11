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
            	<td style="border-bottom:solid 1px #999; padding:10px;">
                	<img alt="Tiger Logo" src="<?php echo base_url()?>/images/logo.png">
                </td>
            </tr>    
            <tr>
                <td style="padding:0px 10px;">
                	<p>Dear <strong>Mr. <?php echo $vendor_name;?>,</strong></p>
                    <p>Your received this mail because you filled out a form on Tiger indicating that you had forgotten your password</p>
                    
					<p>Password: <?php echo $vendor_password;?>
                    
					<p>Thank you, <br />Warm Regards,</p> <p>Team <br /><strong>Tiger</strong></p>
                </td>
            </tr>
        </table>
    </div>

</body>
</html>
