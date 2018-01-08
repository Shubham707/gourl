<?php

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=exceldata.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<table border='1'>
  <tr>
	  <td>paymentID</td>
	  <td>boxID</td>
	  <td>boxType</td>
	  <td>orderID</td>
	  <td>userID</td>
	  <td>countryID</td>
	  <td>coinLabel</td>
	  <td>amount</td>
	  <td>amountUSD</td>
	  <td>unrecognised</td>
	  <td>addr</td>
	  <td>txID</td>
	  <td>txDate</td>
	  <td>txConfirmed</td>
	  <td>txCheckDate</td>
	  <td>processed</td>
	  <td>processedDate</td>
	  <td>recordCreated</td>
  </tr>
  <?php foreach($users as $user){ ?>
  <tr>
	  <td><?php echo $user->paymentID;?></td>
	  <td><?php echo $user->boxID;?></td>
	  <td><?php echo $user->boxType;?></td>
	  <td><?php echo $user->orderID;?></td>
	  <td><?php echo $user->userID;?></td>
	  <td><?php echo $user->countryID;?></td>
	  <td><?php echo $user->coinLabel;?></td>
	  <td><?php echo $user->amount;?></td>
	  <td><?php echo $user->amountUSD;?></td>
	  <td><?php echo $user->unrecognised;?></td>
	  <td><?php echo $user->addr;?></td>
	  <td><?php echo $user->txID;?></td>
	  <td><?php echo $user->txDate;?></td>
	  <td><?php echo $user->txConfirmed;?></td>
	  <td><?php echo $user->txCheckDate;?></td>
	  <td><?php echo $user->processed;?></td>
	  <td><?php echo $user->processedDate;?></td>
	  <td><?php echo $user->recordCreated;?></td>
  </tr>
  <?php }?>
</table>