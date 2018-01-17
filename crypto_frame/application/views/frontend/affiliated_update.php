 <?php $this->load->view('frontend/headerfront');?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/calender/css/jquery.datepicker.css">
<style type="text/css"> 
    select{ width: 80% !important; margin-top: 20px; } 
    input{ width: 80% !important; margin-top: 20px; }
    textarea{ width: 80% !important; margin-top: 20px; }
    .error{color: red;}
    label{ margin-top: 20px; }
 ul.nav a { cursor: pointer; float: left; list-style: none; display: inline-block;}
.active { background-color:#4e4975 !important;font-weight:bolder; }
</style>

 <div class="page-content-wrap bg-light">
    <div class="page-content-holder no-padding">    
        <div class="page-title">                            
            <h1>Welcome Shubham</h1> 
        </div>
    </div>
</div>
<div class="page-content-wrap bg-light">
    <div class="page-content-holder no-padding">
        <div class="page-title">                            
            <a class="btn btn-info" href="<?php echo base_url();?>index.php/welcome/account">Your Persional Detail</a> 
                         
        </div>
    </div>
</div>          
<div class="page-content-wrap">                    

    <div class="page-content-holder">
        <div id="hide" style="color: green; text-align: center;"> <?php echo @$success;?></div>
        <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
            <h2 class="heading-underline">1. Paycrypt.io Affiliated Online</h2>
            <div class="block-heading-text">
            Use our Paycrypt Monetiser Online if you don't have your own website -
            Monetise/sell your Files & Music & Texts & Images & Video online for cryptocoins - Bitcoin, Bitcoin Cash, Litecoin, Dash, etc. Create Your Free Paycrypt Payment Urls below (it will protect your information from visitors directly proceeding and monetise it) and after share them on the web - twitter / forums / websites / etc. Make Cryptocoins Money/USD Online   
            </div>
            <div class="page-content-wrap bg-light">
            <!-- page content holder -->
            <form id="saveAffifiliated" class="cmxform" id="commentForm" method="post" action="<?php echo base_url();?>index.php/affiliated/edit-affiliated">
                <?php foreach($details as $affiliated):?>
            <div class="page-content-holder no-padding">   
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Affiliate Title:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="privateURL" name="title" required placeholder="Affiliate Title" value="<?= $affiliated->title?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Your Affiliate Key:</label>
                    <div class="col-sm-5">
                        <input  type="text" class="form-control" id="privateURL" name="affiPrivateKey" required placeholder="Affiliate Key" value="<?= $affiliated->affiPrivateKey;?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Your Bitcoin Wallet Address:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="privateURL" name="bitcoinAddress" required placeholder="Bitcoin Wallet Address" value="<?= $affiliated->bitcoinAddress?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Your BitcoinCash Wallet Address:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="privateURL" name="bitcoinCashAddress" required placeholder="Your BitcoinCash Wallet Address" value="<?= $affiliated->bitcoinCashAddress?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Your Litecoin Wallet Address:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="privateURL" name="litecoinAddress" required placeholder="Your Litecoin Wallet Address" value="<?= $affiliated->litecoinAddress?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Your Dash Wallet Address:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="privateURL" name="dashcoinAddress" required placeholder="Your Dash Wallet Address" value="<?= $affiliated->dashcoinAddress?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Your Dogecoin Wallet Address:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="privateURL" name="dogecoinAddress" required placeholder="Your Dogecoin Wallet Address" value="<?= $affiliated->dogecoinAddress?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Your Speedcoin Wallet Address: </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="privateURL" name="speedcoinAddress" required placeholder="Your Speedcoin Wallet Address" value="<?= $affiliated->speedcoinAddress?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Your UniversalCurrency Wallet Address:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="privateURL" name="universalCurrency" required placeholder="Your UniversalCurrency Wallet Address" value="<?= $affiliated->universalCurrency?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username"> Your Peercoin Wallet Address: </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="privateURL" name="peercoinAddress" required placeholder=" Your Peercoin Wallet Address" value="<?= $affiliated->peercoinAddress?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username"> Your Reddcoin Wallet Address: </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="privateURL" name="reddcoinAddress" required placeholder=" Your Reddcoin Wallet Address" value="<?= $affiliated->reddcoinAddress?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Your Potcoin Wallet Address:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="privateURL" name="potcoinAddress" required placeholder="Your Potcoin Wallet Address" value="<?= $affiliated->potcoinAddress?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Your Feathercoin Wallet Address: </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="privateURL" name="feathercoinAddress" required placeholder="Your Feathercoin Wallet Address" value="<?= $affiliated->feathercoinAddress?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username"> Your Vertcoin Wallet Address: </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="privateURL" name="vertcoinAddress" required placeholder="Your Vertcoin Wallet Address" value="<?= $affiliated->vertcoinAddress?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Your MonetaryUnit Wallet Address:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="privateURL" name="MonetaryUnitAddress" required placeholder="Your MonetaryUnit Wallet Address" value="<?= $affiliated->MonetaryUnitAddress?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Verifying it's you: </label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" id="privateURL" name="email" required placeholder="Verifying it's you" value="<?= $affiliated->email?>">
                    </div>
                </div>

                <input type="hidden" class="form-control" id="privateURL" name="affiliated_id" value="<?= $affiliated->affiliated_id?>">

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username"> </label>
                    <div class="col-sm-5">
                        <input type="submit" class="btn btn-info"  name="submit" value="Update Affiliated Data">
                    </div>
                </div>
            </div>
       <?php endforeach;?>
            <br>
             </form>
             </div>
        </div>
        
    </div>

</div>

</div>
<script>
    function getCoinLabel(label)
    {
        document.getElementById('or').innerHTML=label; 
        document.getElementById('coinlabel').value=label; 
    }
    document.getElementById('or').innerHTML='BitCoin';

</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/calender/js/jquery.datepicker.js"></script>
     <script type="text/Javascript">
function checkDec(el){
 var ex = /^[0-9]+\.?[0-9]*$/;
 if(ex.test(el.value)==false){
   el.value = el.value.substring(0,el.value.length - 1);
  }
}

$("#hide").hide(3000);
</script>
 <script type="text/javascript">
       

        $( document ).ready( function () {
            $( "#saveAffifiliated" ).validate( {
                rules: {
                    privateURL: "required",
                    privateText: "required",
                    publicTitle: "required",
                    coinRate: "required",
                    affiUSD: "required",
                    walletAddress: "required",
                    expiryDate: "required",

                    privateURL: {
                        required: true,
                        
                    },
                    privateText: {
                        required: true,
                       
                    },
                    publicTitle: {
                        required: true,
                  
                    },
                    coinRate: {
                        required: true,
                    },
                    affiUSD: {
                        required: true,
                    },
                    walletAddress: {
                        required: true,
                    },
                    expiryDate: {
                        required: true,
                    },
                },
                messages: {
                    privateURL: "Please enter your Private Url",
                    privateText: "Please enter your Ptivate Text",
                    publicTitle: "Please enter your Title",
                    coinRate: "Please enter your Coin Rate",
                    affiUSD: "Please enter input USD",
                    walletAddress: "Please enter Wallet Address",
                    expiryDate: "Please enter Expiry Date"
                    
                },
                errorElement: "em",
                errorPlacement: function ( error, element ) {
                    // Add the `help-block` class to the error element
                    error.addClass( "help-block" );

                    if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.parent( "label" ) );
                    } else {
                        error.insertAfter( element );
                    }
                },
                highlight: function ( element, errorClass, validClass ) {
                    $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
                },
                unhighlight: function (element, errorClass, validClass) {
                    $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
                }
            } );
        });
$(function() {
    $( 'ul.nav li' ).on( 'click', function() {
        $( this ).parent().find( 'li.active' ).removeClass( 'active' );
        $( this ).addClass( 'active' );
    });
});
        </script>
<?php $this->load->view('frontend/footer');?>  