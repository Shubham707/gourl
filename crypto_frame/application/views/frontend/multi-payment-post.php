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
 
.active { font-weight:bolder; }
.realperson-challenge { display: inline-block }
ul li #DIV2 {
    left: 5px;
    top: -29px;
    margin-top: -11px;
    width: 85px !important;
    height: 100px;
    border: 1px solid white;
    position: absolute;
    z-index: 0;
    opacity: 0.3;
    float: left !important;
}
ul li input #DIV3 {
    left: 5px;
    top: -29px;
    margin-top: -11px;
    width: 85px !important;
    height: 100px;
    border: 1px solid white;
    position: absolute;
    z-index: 0;
    float: left !important;
}

img{ margin-top: 30px; }
.nav>li {
    position: relative;
    display: inline;
}
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
            <a class="btn btn-info" href="<?php echo base_url();?>welcome/account">Your Persional Detail</a> 
                <a class="pull-right btn btn-info" href="<?php echo base_url();?>multicurrency">Add Payment Cart</a>          
        </div>

            

    </div>
</div>          
<div class="page-content-wrap">                    

    <div class="page-content-holder">
        <div id="hide" style="color: green; text-align: center;"> <?php echo @$success;?></div>
        <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
            <h2 class="heading-underline">Payment Url</h2>
            <div class="block-heading-text">
            Use our GoUrl Monetiser Online if you don't have your own website -
            Monetise/sell your Files & Music & Texts & Images & Video online for cryptocoins - Bitcoin, Bitcoin Cash, Litecoin, Dash, etc. Create Your Free GoUrl Payment Urls below (it will protect your information from visitors directly proceeding and monetise it) and after share them on the web - twitter / forums / websites / etc. Make Cryptocoins Money/USD Online   
            </div>
            <div class="page-content-wrap bg-light">
            <!-- page content holder -->
            <!-- <form id="saveAffifiliated" class="cmxform" id="commentForm" method="post" action="<?php //echo base_url();?>wallet/multi_wallet_payment"> -->
                <form id="saveAffifiliated" class="cmxform" id="commentForm" method="post" >
                    <!-- action="<?php //echo base_url();?>multicurrency/add" -->
            <div class="page-content-holder no-padding">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="username"> Select Currency:</label>
                    <div class="col-sm-8">
                    <ul class="nav">
                        <?php foreach ($coins as $value) { ?>
                        <li>
                            <img id="DIV3" onclick="myFunction(<?= $value->coin_name;?>);" src="<?php echo base_url();?>uploads/<?= $value->coin_image;?>" width="95" height="100">
                            <input id="DIV2" type="checkbox" name="bitcoin" value="<?= $value->coin_name;?>"> 
                            
                        </li>
                         <?php } ?>
                    </ul>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Amount in Box:</label>
                    <div class="col-sm-5">
                        <div class="col-sm-5">
                            <input type="number" class="myField1" id="coinRate" name="inr" required placeholder="Price" onkeyup="checkDec(this);">
                        </div>
                        <div class="col-sm-5">
                            <input class="myField2" type="number" id="coinRate" name="usd" required placeholder="USD" onkeyup="checkDec(this);">
                        </div>
                    </div>
                </div>
               <!--  <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Your Wallet Address:</label>
                    <div class="col-sm-5">
                        <input id="walletAddress" class="form-control" name="walletAddress" required placeholder="Wallet Address">
                    </div><br>
                </div> -->
                 
                <!-- <div class="form-group">
                     <label class="col-sm-4 control-label" for="username">Url Expiry Date (GMT):</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="expiryDate" id="expiryDate" data-select="datepicker" data-toggle="datepicker" placeholder="Date" required><br>
                        
                    </div>
                </div> -->
              <!--   <div class="form-group">
                     <label class="col-sm-4 control-label" for="username">Date:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="expiryDate" id="expiryDate" data-select="datepicker" data-toggle="datepicker"  required><br>
                        
                    </div>
                </div> -->
                
                <input type="hidden" id="boxId" name="boxId" value="<?= $boxid;?>">
                <br>
                
                
            </div><br>
            <div class="page-content-holder no-padding">
                <div class="page-title">
                    <button type="button" id="insert" name="button" class="btn btn-info">Payment</button></div>
            </div>
             </form><br>
             <div class="page-content-holder no-padding">
                <div id="details"></div>
            </div>
             </div>
        </div>
        
    </div>

</div>

</div>
<script type="text/javascript">

function myFunction(coin) {
    document.getElementById(coin).style.opacity = ".5";
}
</script>
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
  $('.myField1').keypress(function() {
    $('.myField2 ').attr("disabled", true);
  });
   $('.myField2').keypress(function() {
    $('.myField1').attr("disabled", true);
  });
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
   $('#insert').click(function() {
        var DIV2= $('#DIV2').val();
        var coinRate= $('#coinRate').val();
        var boxId= $('#boxId').val();
        //alert(DIV2+''+coinRate+''+boxId);
        $.ajax({
            url:"<?php echo base_url();?>multicurrency/add",
            data:{  name:DIV2, price:coinRate, box_id:boxId },
            success:function(data)
            {
                alert("Add BitCoin to cart");
                $('#details').html($data);
            }
        });
        
    });
</script>
<?php $this->load->view('frontend/footer');?>