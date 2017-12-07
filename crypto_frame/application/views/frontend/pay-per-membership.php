<?php


	require_once( "cryptobox.class.php" );
	require_once("cryptobox.config.php");

	
	/**** CONFIGURATION VARIABLES ****/ 
	
	$userID 		= "";				// you don't need to use userID for unregistered website visitors
	$userFormat		= "COOKIE";			// save userID in cookies (or you can use IPADDRESS, SESSION)
	$orderID 		= "signuppage";		// Registration Page   
	$amountUSD		= 1;				// price per registration - 1 USD
										// for convert fiat currencies Euro/GBP/etc. to USD, use function convert_currency_live()
	$period			= "NOEXPIRY";		// one time payment for each new user, not expiry
	$def_language	= "en";				// default Payment Box Language
	$def_payment	= "bitcoin";		// Default Coin in Payment Box

	// IMPORTANT: Please read description of options here - https://gourl.io/api-php.html#options  



	// List of coins that you accept for payments
	// For example, for accept payments in bitcoin, bitcoincash, litecoin use - $available_payments = array('bitcoin', 'bitcoincash', 'litecoin'); 
	$available_payments = array('bitcoin', 'bitcoincash', 'litecoin', 'dash', 'dogecoin', 'speedcoin', 'reddcoin', 'potcoin', 'feathercoin', 'vertcoin', 'peercoin', 'monetaryunit');
	
	
	// Goto  https://gourl.io/info/memberarea/My_Account.html
	// You need to create record for each your coin and get private/public keys
	// Place Public/Private keys for all your available coins from $available_payments
	
	 $all_keys = array(	
	 	"bitcoin"  => array( 
	 		"public_key" => "16514AALfxd2Bitcoin77BTCPUBejOvM2rD3EKoZQSX9SSQOdz",
	 		"private_key" => "16514AALfxd2Bitcoin77BTCPRVGSY8MidDk8Xl6hiEtNtbCKm"),
		"bitcoincash"  => array("public_key" => "15161AAzo4PVBitcoincash77BCHPUBkUmYCa2dR770wNNstdk",  "private_key" => "15161AAzo4PVBitcoincash77BCHPRV7hmp8s3ew6pwgOMgxMq"),
		"litecoin" => array("public_key" => "16515AA9nMCnLitecoin77LTCPUBWTGrmnz6HU31FlkaNESfjo", "private_key" => "16515AA9nMCnLitecoin77LTCPRVmGq2yD0X6lNDa0lAKzstfC"),
		"dash" => array("public_key" => "16519AAmcn0mDash77DASHPUB4Q36RrCJ6rSH6gXpXJkGaXeXD", "private_key" => "16519AAmcn0mDash77DASHPRVeM1NGzLBlFaBI8eJ662IjvriS"),
		"dogecoin" => array("public_key" => "16522AAFCVTCDogecoin77DOGEPUBWnZX6pbd9feVyaJ3A5bcl", "private_key" => "16522AAFCVTCDogecoin77DOGEPRVotsJWe7NEwpY7kNxD7M0N"),
		"speedcoin"=> array("public_key"=>"16523AACeSmZSpeedcoin77SPDPUBaPnaf4ZI53cFz8ZGfyXpJ",
			"private_key"=>"16523AACeSmZSpeedcoin77SPDPRVWrYuVPpjk94XhYwhYWLCf"),
		"reddcoin"=> array("public_key" => "16524AADLbgNReddcoin77RDDPUB9a48UoxwlkBsnjL1xLqNk5",
			"private_key"=>"16524AADLbgNReddcoin77RDDPRVHWJjJRs92mAjlVXbFMZFK2"),
		"potcoin"=> array("public_key" => "16525AAQer7bPotcoin77POTPUBJu1UFosvjlWzsTNYA17xuBi",
			"private_key"=>"16525AAQer7bPotcoin77POTPRVSh96QiXmwvz1WjKQJy2WuBl"),
		"feathercoin"=> array("public_key" => "16526AAyQYHTFeathercoin77FTCPUBHebpojSKpjSXjpIkux2",
			"private_key"=>"16526AAyQYHTFeathercoin77FTCPRVelBznBt1wiIlhHnnKzS"),
		"vertcoin"=> array("public_key" => "16527AAb5xWsVertcoin77VTCPUB6XLfzOn5rWFhtnYSW04Rp8",
			"private_key"=>"16527AAb5xWsVertcoin77VTCPRVT2qZciVv646y5ZBMl1Boib"),
		"peercoin"=> array("public_key" => "16528AA6r16JPeercoin77PPCPUBbxix665lhw0Q9UR2avCPSe",
			"private_key"=>"16528AA6r16JPeercoin77PPCPRV9Rbpq8pX41HDxAI38mYYRe"),
		"monetaryunit"=> array("public_key" => "16529AAitqrbMonetaryunit77MUEPUBxoPquTRf6Du34vPY8a",
			"private_key"=>"16529AAitqrbMonetaryunit77MUEPRVlphD8yvsJOOBj0EhUQ"),
				// etc.
			); 

/*	echo "<pre>";
	print_r($all_keys);
	echo "</pre>";
	die();*/
	/********************************/


	// Re-test - that all keys for $available_payments added in $all_keys
	if (!in_array($def_payment, $available_payments)) 
		$available_payments[] = $def_payment; 
	
	 
	foreach($available_payments as $v)
	{
		if (!isset($all_keys[$v]["public_key"]) || !isset($all_keys[$v]["private_key"])) die("Please add your public/private keys for '$v' in \$all_keys variable");

		elseif (!strpos($all_keys[$v]["public_key"], "PUB"))  
			die("Invalid public key for '$v' in \$all_keys variable");

		elseif (!strpos($all_keys[$v]["private_key"], "PRV")) 
			die("Invalid private key for '$v' in \$all_keys variable");

		elseif (strpos('CRYPTOBOX_PRIVATE_KEYS', $all_keys[$v]["private_key"]) === false)
		 die("Please add your private key for '$v' in variable \$cryptobox_private_keys, file cryptobox.config.php.");
	}
	
	// Current selected coin by user
	$coinName = cryptobox_selcoin($available_payments, $def_payment);
	
	
	// Current Coin public/private keys
	$public_key  = $all_keys[$coinName]["public_key"];
	$private_key = $all_keys[$coinName]["private_key"];
	
	
	
	/** PAYMENT BOX **/
	$options = array(
			"public_key"  => $public_key, 	// your public key from gourl.io
			"private_key" => $private_key, 	// your private key from gourl.io
			"webdev_key"  => "", 		// optional, gourl affiliate key
			"orderID"     => $orderID, 		// order id
			"userID"      => $userID, 		// unique identifier for every user
			"userFormat"  => $userFormat, 	// save userID in COOKIE, IPADDRESS or SESSION
			"amount"   	  => 0,				// price in coins OR in USD below
			"amountUSD"   => $amountUSD,	// we use price in USD
			"period"      => $period, 		// payment valid period
			"language"	  => $def_language  // text on EN - english, FR - french, etc
	);

	


	// Initialise Payment Class
	$box = new Cryptobox ($options);
	
	// coin name
	$coinName = $box->coin_name(); 
	
	
	// Successful Cryptocoin Payment received
	// Please use also IPN function cryptobox_new_payment($paymentID = 0, $payment_details = array(), $box_status = "") for update db records, etc
	if ($box->is_paid())
	{
		// one time action
		if (!$box->is_processed())
		{
			// One time action after payment has been made
					
			$message = "Thank you (order #".$orderID.", payment #".$box->payment_id()."). We upgraded your membership to Premium";
	
			// Set Payment Status to Processed
			$box->set_status_processed();
		}
		else $message = "You have a Premium Membership";
	}
	
	
	// Optional - Language selection list for payment box (html code)
	$languages_list = display_language_box($def_language);





	// ...
	// Also you need to use IPN function cryptobox_new_payment($paymentID = 0, $payment_details = array(), $box_status = "") 
	// for send confirmation email, update database, update user membership, etc.
	// You need to modify file - cryptobox.newpayment.php, read more - https://gourl.io/api-php.html#ipn
	// ...
		
	
	
?>


<div align='center'>
<div style='width:100%;height:auto;line-height:50px;background-color:#f1f1f1;border-bottom:1px solid #ddd;color:#49abe9;font-size:18px;'>
	11. GoUrl <b>Pay-Per-Membership</b> Example (<?php echo $coinName; ?> payments). Use it on your website. 
	<div style='float:right;'><a style='font-size:15px;color:#389ad8;margin-right:20px' href='<?= "//".$_SERVER["HTTP_HOST"].str_replace(".php", "-multi.php", $_SERVER["REQUEST_URI"]); ?>'>Multiple Crypto</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://gourl.io/<?= strtolower($coinName) ?>-payment-gateway-api.html#p6'>PHP Source</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://github.com/cryptoapi/Bitcoin-Payment-Gateway-ASP.NET/tree/master/GoUrl/Views/Examples/PayPerMembership.cshtml'>ASP.NET Source</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://wordpress.org/plugins/gourl-bitcoin-payment-gateway-paid-downloads-membership/'>Wordpress</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://gourl.io/<?= strtolower($coinName) ?>-payment-gateway-api.html'>Other Examples</a></div>
</div>
<br>
<h1>Example - Upgrading to a Premium Account</h1>

<?php if ($box->is_paid()): ?>

	<!-- User already paid premium membership -->
	<!-- You can use this function - $box->is_paid() on all other your premium webpages, it will return true during all user paid period (1 month) --> 
	<!-- Your Premium Pages Code Here -->

	<br><br><br>
	<?php echo $message; ?>
	<br><br><br>
	
	
<?php else: ?>

	 <!-- Awaiting Payment -->
	<a href='#gourlcryptocoins'><img alt='Awaiting Payment - Cryptocoin Pay Per Membership' border='0' src='https://gourl.io/images/example10.png'></a>
	<br><br><br>	
	<h3>Upgrade Your Membership Now ( $<?php echo $amountUSD; ?> per <?php echo $period; ?> ) - </h3>
	
<?php endif; ?> 	

	<div style='font-size:12px;margin:50px 0 5px 370px'>Language: &#160; <?php echo $languages_list; ?></div>
	<?php echo $box->display_cryptobox(true, 540, 230, "padding:3px 6px;margin:10px;border:10px solid #f7f5f2;"); ?>

	
</div><br><br><br><br><br><br>
<div style='position:absolute;left:0;'>
	<a target="_blank" href="http://validator.w3.org/check?uri=<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
		<img src="https://gourl.io/images/w3c.png" alt="Valid HTML 4.01 Transitional">
	</a>
</div>
