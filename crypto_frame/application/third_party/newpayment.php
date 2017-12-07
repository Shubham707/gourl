    <?   
        function cryptobox_new_payment($paymentID, $payment_details, $box_status)
        {
            // IPN Function will receive -  
            $paymentID = 1; // record id in your table crypto_payments 
            $payment_details = Array
            {
                "status":"payment_received"
                "err":""
                "private_key_hash":"d91921eef5d136d5cd22bd5210b4494d417...." // hash("sha512", your_gourl_private_key)
                "box":"120"
                "boxtype":"paymentbox"
                "order":"order15620A"
                "user":"user26"
                "usercountry":"USA"
                "amount":"0.0479166"
                "amountusd":"11.5"
                "coinlabel":"BTC"
                "coinname":"bitcoin"
                "addr":"14dt2cSbvwghDcETJDuvFGHe5bCsCPR9jW"
                "tx":"95ed924c215f2945e75acfb5650e28384deac382c9629cf0d3f31d0ec23db08d"
                "confirmed":0
                "timestamp":"1422624765 "
                "date":"30 January 2015"
                "datetime":"2015-01-30 13:32:45"
            } 
            $box_status = "cryptobox_newrecord"; // or "cryptobox_updated" (description below)
        ?>
