 <?php $this->load->view('frontend/header');?>
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
.realperson-challenge { display: inline-block }
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
<!-- id="hide" -->
    <div class="page-content-holder">
        <div  style="color: green; text-align: center;"> <?php echo @$success;?></div>
        <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
            <h2 class="heading-underline">1. Gourl.io Monetiser Online</h2>
            <div class="block-heading-text">
            Use our GoUrl Monetiser Online if you don't have your own website -
            Monetise/sell your Files & Music & Texts & Images & Video online for cryptocoins - Bitcoin, Bitcoin Cash, Litecoin, Dash, etc. Create Your Free GoUrl Payment Urls below (it will protect your information from visitors directly proceeding and monetise it) and after share them on the web - twitter / forums / websites / etc. Make Cryptocoins Money/USD Online   
            </div>
            <div class="page-content-wrap bg-light">
            <!-- page content holder -->
            <form id="saveAffifiliated" class="cmxform" id="commentForm" method="post" action="<?php echo base_url();?>index.php/monetiser/add-monitiser">
            <div class="page-content-holder no-padding">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="username"> Select Currency:</label>
                    <div class="col-sm-8">
                    <ul class="nav">
                        <?php foreach ($coins as $value) { ?>
                         <li class="active"><a onclick="getCoinLabel('<?= $value->coin_name;?>');"> <img src="<?php echo base_url();?>uploads/<?= $value->coin_image;?>" width="100" height="100"></a></li>
                         <?php } ?>
                    </ul>
                    </div>
                </div>
                       
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username"> Private URL:</label>
                    <div class="col-sm-5">
                        <input class="form-control" id="privateURL" name="privateURL" required placeholder="Private URL">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="password">Private Text (optional)</label>
                    <div class="col-sm-5">
                      <textarea class="form-control" id="privateText" name="privateText" required placeholder="Private Text (optional)"></textarea>
                    </div><br>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Your Public Title:</label>
                    <div class="col-sm-5">
                        <input id="publicTitle" class="form-control" name="publicTitle" required placeholder="Private URL">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Amount in Box:</label>
                    <div class="col-sm-5">
                        <div class="col-sm-5">
                            <input  id="coinRate" name="coinRate" required placeholder="Price" onkeyup="checkDec(this);">
                        </div>
                        <div class="col-sm-2" id="or" style="margin-top: 25px;"></div>
                        <div class="col-sm-5">
                        OR <input  id="affiUSD" name="affiUSD" required placeholder="USD" onkeyup="checkDec(this);">
                        </div> 
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Your Wallet Address:</label>
                    <div class="col-sm-5">
                        <input id="walletAddress" class="form-control" name="walletAddress" required placeholder="Private URL">
                    </div><br>
                </div>
                
                <div class="form-group">
                     <label class="col-sm-4 control-label" for="username">Url Expiry Date (GMT):</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="expiryDate" id="expiryDate" data-select="datepicker" data-toggle="datepicker" data-locked="25/12/2014;1/1/2015" required><br>
                        
                    </div>
                </div>
                 <!-- <div class="form-group">
                     <label class="col-sm-4 control-label" for="username">Captcha:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="expiryDate" id="expiryDate" data-select="datepicker" data-toggle="datepicker" data-locked="25/12/2014;1/1/2015" required><br>
                        
                    </div>
                </div> -->

                <input type="hidden" name="boxId" value="<?= $boxid;?>">
                <input type="hidden" name="coinLabel" id="coinlabel" value="">
                
            </div>
            <div class="page-content-holder no-padding">
                <div class="page-title"><button type="submit" name="submit" class="btn btn-info">Create New Payment Url Online</button></div>
            </div>
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