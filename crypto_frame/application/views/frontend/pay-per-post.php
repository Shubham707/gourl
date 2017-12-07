<?php
/**
 * @category    Example7 - Pay-Per-Registration (single crypto currency in payment box)
 * @package     GoUrl Cryptocurrency Payment API 
 * copyright    (c) 2014-2017 Delta Consultants
 * @crypto      Supported Cryptocoins - Bitcoin, BitcoinCash, Litecoin, Dash, Dogecoin, Speedcoin, Reddcoin, Potcoin, Feathercoin, Vertcoin, Peercoin, MonetaryUnit
 * @website     https://gourl.io/bitcoin-payment-gateway-api.html#p4
 * @live_demo   https://gourl.io/lib/examples/pay-per-registration.php
 */ 
    
    require_once( "cryptobox.class.php" );
    
    
    //require_once( "cryptobox.class.php" );
    //require_once("cryptobox.config.php");

    
    /**** CONFIGURATION VARIABLES ****/ 
    
    $userID         = "";               // you don't need to use userID for unregistered website visitors
    $userFormat     = "COOKIE";         // save userID in cookies (or you can use IPADDRESS, SESSION)
    $orderID        = "signuppage";     // Registration Page   
    $amountUSD      = 1;                // price per registration - 1 USD
                                        // for convert fiat currencies Euro/GBP/etc. to USD, use function convert_currency_live()
    $period         = "NOEXPIRY";       // one time payment for each new user, not expiry
    $def_language   = "en";             // default Payment Box Language
    $def_payment    = "bitcoin";        // Default Coin in Payment Box

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

/*  echo "<pre>";
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
        elseif (strpos(CRYPTOBOX_PRIVATE_KEYS, $all_keys[$v]["private_key"]) === false) die("Please add your private key for '$v' in variable \$cryptobox_private_keys, file cryptobox.config.php.");
    }
    
    // Current selected coin by user
    $coinName = cryptobox_selcoin($available_payments, $def_payment);
    
    
    // Current Coin public/private keys
    $public_key  = $all_keys[$coinName]["public_key"];
    $private_key = $all_keys[$coinName]["private_key"];
    
    
    
    /** PAYMENT BOX **/
    $options = array(
            "public_key"  => $public_key,   // your public key from gourl.io
            "private_key" => $private_key,  // your private key from gourl.io
            "webdev_key"  => "",        // optional, gourl affiliate key
            "orderID"     => $orderID,      // order id
            "userID"      => $userID,       // unique identifier for every user
            "userFormat"  => $userFormat,   // save userID in COOKIE, IPADDRESS or SESSION
            "amount"      => 0,             // price in coins OR in USD below
            "amountUSD"   => $amountUSD,    // we use price in USD
            "period"      => $period,       // payment valid period
            "language"    => $def_language  // text on EN - english, FR - french, etc
    );

    

    
    
    
    // Initialise Payment Class
    $box = new Cryptobox ($options);
    
    // coin name
    $coinName = $box->coin_name(); 
    
    
    // Optional - Language selection list for payment box (html code)
    $languages_list = display_language_box($def_language);
    
    
    
    
    // Form Data
    // --------------------------
    $ftitle  = (isset($_POST["ftitle"])) ? $_POST["ftitle"] : "";
    $ftext   = (isset($_POST["ftext"])) ? $_POST["ftext"] : "";
    
    $error = "";
    $successful = false;
    
    if (isset($_POST) && isset($_POST["ftitle"]))
    {
        if (!$ftitle)           $error .= "<li>Please enter Title</li>";
        if (!$ftext)            $error .= "<li>Please enter Text</li>";
        if (!$box->is_paid())   $error .= "<li>".$coinName."s have not yet been received</li>";
        if ($error)             $error  = "<br><ul style='color:#eb4847'>$error</ul>";
        
        if ($box->is_paid() && !$error)
        {
            // Successful Cryptocoin Payment received
            // Your code here - 
            // ...
            // ...
                    
            // Set Payment Status to Processed
            $successful = true;
            $box->set_status_processed();
            
            // Optional, cryptobox_reset() will delete cookies/sessions with userID and
            // new cryptobox with new payment amount will be show after page reload.
            // Cryptobox will recognize user as a new one with new generated userID
            // If you manual setup userID, you need to change orderID also
            $box->cryptobox_reset();
        }
    }
    // --------------------------






    // ...
    // Also you need to use IPN function cryptobox_new_payment($paymentID = 0, $payment_details = array(), $box_status = "") 
    // for send confirmation email, update database, update user membership, etc.
    // You need to modify file - cryptobox.newpayment.php, read more - https://gourl.io/api-php.html#ipn
    // ...
        
    
    
    
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<title><?php echo $coinName; ?> Pay-Per-Post Cryptocoin Payment Example</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='Expires' content='-1'>
<meta name='robots' content='all'>
<script src='../cryptobox.min.js' type='text/javascript'></script>
</head>
<body style='font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#666;margin:0'>
<div align='center'>
<div style='width:100%;height:auto;line-height:50px;background-color:#f1f1f1;border-bottom:1px solid #ddd;color:#49abe9;font-size:18px;'>
    5. GoUrl <b>Pay-Per-Post</b> Example (<?php echo $coinName; ?> payments). Use it on your website. 
    <div style='float:right;'><a style='font-size:15px;color:#389ad8;margin-right:20px' href='<?= "//".$_SERVER["HTTP_HOST"].str_replace(".php", "-multi.php", $_SERVER["REQUEST_URI"]); ?>'>Multiple Crypto</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://gourl.io/<?= strtolower($coinName) ?>-payment-gateway-api.html#p3'>PHP Source</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://github.com/cryptoapi/Bitcoin-Payment-Gateway-ASP.NET/tree/master/GoUrl/Views/Examples'>ASP.NET Source</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://wordpress.org/plugins/gourl-bitcoin-payment-gateway-paid-downloads-membership/'>Wordpress</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://gourl.io/<?= strtolower($coinName) ?>-payment-gateway-api.html'>Other Examples</a></div>
</div>
<h1>Example - Paid Posts</h1>
You can sell right to publish new posts on your website
<br><br><br>
<img alt='Invoice' border='0' src='https://gourl.io/images/example6.png'>

<a name='i'></a>

<?php if ($successful): ?>

    <div align='center'>
        <img alt='New Post' border='0' src='https://gourl.io/images/example7.png'>
        <div style='margin:40px;font-size:24px;color:#339e2e;font-weight:bold'>Your text has been successfully posted on our website!</div>
        <a href='pay-per-post.php'>Publish new posts &#187;</a>
    </div>  
    
<?php else: ?>

    <form name='form1' style='font-size:14px;color:#444' action="pay-per-post.php#i" method="post">
        <table cellspacing='20'>
            <tr><td colspan='2'><img alt='New Post' border='0' src='https://gourl.io/images/example7.png'><?php echo $error; ?></td></tr>
            <tr><td width='100'>Title: </td><td width='300'><input style='padding:6px;font-size:18px;' size='40' type="text" name="ftitle" value="<?php echo $ftitle; ?>"></td></tr>
            <tr><td>Text: </td><td><textarea style='padding:6px;font-size:18px;' rows="4" cols="40" name="ftext"><?php echo $ftext; ?></textarea></td></tr>
            <?php if (!$box->is_paid()): ?>
                <tr><td colspan='2'>* You need to pay <?php echo $coinName; ?>s (~<?php echo $amountUSD; ?> US$) for posting your text on our website</td></tr>
            <?php endif; ?>
        </table>
    </form>

    <div style='width:600px;background-color:#f9f9f9;padding-top:10px'>
            <div style='font-size:12px; margin:5px 0 5px 390px;'>Language: &#160; <?php echo $languages_list; ?></div>
            <?php echo $box->display_cryptobox(); ?>
    </div>
    
    <br><br><br>
    <button onclick='document.form1.submit()' style='padding:6px 20px;font-size:18px;'>Post Your Article/Comment</button>
    
<?php endif; ?>     


</div><br><br><br><br><br><br>
<div style='position:absolute;left:0;'><a target="_blank" href="http://validator.w3.org/check?uri=<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"><img src="https://gourl.io/images/w3c.png" alt="Valid HTML 4.01 Transitional"></a></div>
</body>
</html>