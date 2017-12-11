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
                	<!--<p>Dear <strong>Sir,</strong></p>-->
					<p>Tiger received a new query from <strong><?php echo $fld_name1;?></strong></p>
                    <!--<p>Your Book Publishing is <a href="#">kitabgharprakshan.com</a> has got one message as below:</p>-->
                    
					<table border="0" cellpadding="4" cellspacing="0" width="500" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#333; border:solid 1px #3f48cc;">
						
						<tr>
							<td style="border-bottom:solid 1px #3f48cc;">
								Name 
							</td>
							<td style="border-bottom:solid 1px #3f48cc;">
								<?php echo $fld_name1;?>
							</td>
						</tr>
						<tr>
							<td style="border-bottom:solid 1px #3f48cc;">
								Email Id
							</td>
							<td style="border-bottom:solid 1px #3f48cc;">
								<?php echo $fld_email2;?>
							</td>
						</tr>
                        
                        <tr>
							<td style="border-bottom:solid 1px #3f48cc;">
								Contact Number
							</td>
							<td style="border-bottom:solid 1px #3f48cc;">
								<?php echo $fld_number6;?>
							</td>
						</tr>
						<!--<tr>
							<td style="border-bottom:solid 1px #3f48cc;">
								About YourSelf
							</td>
							<td style="border-bottom:solid 1px #3f48cc;">
								<?php //echo $fld_your4;?>
							</td>
						</tr>-->
						<tr>
							<td style="border-bottom:solid 1px #3f48cc;">
								Subject
							</td>
							<td style="border-bottom:solid 1px #3f48cc;">
								<?php echo $fld_sbook3;?>
							</td>
						</tr>
						
						<tr>
							<td style="border-bottom:solid 1px #3f48cc;">
							Query 
							</td>
							<td style="border-bottom:solid 1px #3f48cc;">
								<?php echo $fld_snyops5;?>
							</td>
						</tr> 
						
					</table>
        	
					<br/>
		<!--			<p>For any other assistance, write to us at <a href="#">kitabgharprakashan@gmail.com</a> or visit our website <a href="#">www.kitabgharprakshan.com</a></p>-->
                    
					<p>Thank you, <br />Warm Regards,</p> 
					<p>Team <br /><strong>Tiger</strong></p>
                    <p style="text-transform:uppercase;">This is a self Generated Mail. Please Do Note Reply To it </p>

                </td>
            </tr>
        </table>
    </div>

</body>
</html>
