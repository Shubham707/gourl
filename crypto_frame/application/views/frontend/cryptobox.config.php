<?php

 define("DB_HOST", 	"localhost");				// hostname
 define("DB_USER", 	"root");		// database username
 define("DB_PASSWORD", 	"password");		// database password
 define("DB_NAME", 	"crypto_currency");	// database name


 
 $cryptobox_private_keys = 
 	array(
 		"16514AALfxd2Bitcoin77BTCPRVGSY8MidDk8Xl6hiEtNtbCKm",
 		"15161AAzo4PVBitcoincash77BCHPRV7hmp8s3ew6pwgOMgxMq",
 		"16515AA9nMCnLitecoin77LTCPRVmGq2yD0X6lNDa0lAKzstfC",
 		"16409AAnH3y8Bitcoincash77BCHPRVKBUFh9Ioc8FqD6JzT0U",
 		"16519AAmcn0mDash77DASHPRVeM1NGzLBlFaBI8eJ662IjvriS",
 		"16522AAFCVTCDogecoin77DOGEPRVotsJWe7NEwpY7kNxD7M0N",
 		"16523AACeSmZSpeedcoin77SPDPRVWrYuVPpjk94XhYwhYWLCf",
 		"16524AADLbgNReddcoin77RDDPRVHWJjJRs92mAjlVXbFMZFK2",
 		"16525AAQer7bPotcoin77POTPRVSh96QiXmwvz1WjKQJy2WuBl",
 		"16526AAyQYHTFeathercoin77FTCPRVelBznBt1wiIlhHnnKzS",
 		"16527AAb5xWsVertcoin77VTCPRVT2qZciVv646y5ZBMl1Boib",
 		"16528AA6r16JPeercoin77PPCPRV9Rbpq8pX41HDxAI38mYYRe",
 		"16529AAitqrbMonetaryunit77MUEPRVlphD8yvsJOOBj0EhUQ",

 	);
 define("CRYPTOBOX_PRIVATE_KEYS", implode("^", $cryptobox_private_keys));
 unset($cryptobox_private_keys); 

?>