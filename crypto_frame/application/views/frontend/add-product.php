<?php $this->load->view('frontend/header');?>  
<style type="text/css"> 
    label{ margin-top: 20px; }
    select{ width: 80% !important; margin-top: 20px; } 
    input{ width: 80% !important; margin-top: 20px; }
    textarea{ width: 80% !important; margin-top: 20px; }
    .error{color: red;}
</style>
<div class="page-content-wrap bg-light">
    <div class="page-content-holder no-padding">
        <div class="page-title">
            <h1>Pay Per Product</h1>
            <ul class="breadcrumb">
                <li><a href="#">Home</a>
                </li>
                <li class="active"><a href="#">Pay Per Product</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="page-content-wrap">
    <div class="page-content-holder">
        <div class="block-heading this-animate" data-animate="fadeInDown">
            <h2>Payment Box</h2>
            <div class="block-heading-text">
                <form class="cmxform" id="commentForm" method="post" action="<?php echo base_url();?>index.php/product/add-per-product">
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username"> Product Title:</label>
                    <div class="col-sm-5">
                        <input id="gourlproductTitle" name="gourlproductTitle"  type="text" required placeholder="Product Title"><br>
                    </div>
                </div>
                

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username"> Price:</label>
                    <div class="col-sm-8">
                        <div class="col-sm-3">
                            <input id="gourlpriceUSD" name="gourlpriceUSD"  type="text" required placeholder="Price USD">
                        </div>
                        <div class="col-sm-1" style="margin-top: 20px;">
                            OR
                        </div>
                        <div class="col-sm-3">
                            <input id="gourlpriceUSD" name="gourlpriceUSD"  type="text" required placeholder="Price USD">
                        </div>
                        <div class="col-sm-8">
                           <select style="width : 20% !important;" id="gourlpriceLabel" name="gourlpriceLabel" placeholder="Coin Price Label" required>
                                    <option  value='bitcoin'> bitcoin</option>
                                    <option  value='bitcoincash'> bitcoincash</option>
                                    <option  value='litecoin'> litecoin</option>
                                    <option  value='dash'> dash</option>
                                    <option  value='dogecoin'> dogecoin</option>
                                    <option  value='speedcoin'> speedcoin</option>
                                    <option  value='reddcoin'> reddcoin</option>
                                    <option  value='potcoin'> potcoin</option>
                                    <option  value='feathercoin'> feathercoin</option>
                                    <option  value='vertcoin'> vertcoin</option>
                                    <option  value='peercoin'> peercoin</option>
                                    <option  value='monetaryunit'> monetaryunit</option>
                            </select>
                        </div>
                        <br>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-4 control-label" for="public">Purchase Limit:</label>
                    <div class="col-sm-5">
                       <input id="gourlpurchases" type="text" name="gourlpurchases" placeholder="Purchases Limit" required>
                    </div><br>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="private">Expiry Period:</label>
                    <div class="col-sm-5">
                       <select name="gourlexpiryPeriod" id="gourlexpiryPeriod">
                        <option value="NO EXPIRY" selected="selected">NO EXPIRY</option>
                        <option value="10 MINUTES">10 MINUTES</option>
                        <option value="20 MINUTES">20 MINUTES</option>
                        <option value="30 MINUTES">30 MINUTES</option>
                        <option value="1 HOUR">1 HOUR</option>
                        <option value="2 HOURS">2 HOURS</option>
                        <option value="3 HOURS">3 HOURS</option>
                        <option value="6 HOURS">6 HOURS</option>
                        <option value="12 HOURS">12 HOURS</option>
                        <option value="1 DAY">1 DAY</option>
                        <option value="2 DAYS">2 DAYS</option>
                        <option value="3 DAYS">3 DAYS</option>
                        <option value="4 DAYS">4 DAYS</option>
                        <option value="5 DAYS">5 DAYS</option>
                        <option value="1 WEEK">1 WEEK</option>
                        <option value="2 WEEKS">2 WEEKS</option>
                        <option value="3 WEEKS">3 WEEKS</option>
                        <option value="4 WEEKS">4 WEEKS</option>
                        <option value="1 MONTH">1 MONTH</option>
                        <option value="2 MONTHS">2 MONTHS</option>
                        <option value="3 MONTHS">3 MONTHS</option>
                        <option value="6 MONTHS">6 MONTHS</option>
                        <option value="12 MONTHS">12 MONTHS</option>
                    </select>
                    </div><br>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="coin">PaymentBox Language:</label>
                    <div class="col-sm-5">
                       <select id="gourllang" name="gourllang" placeholder="Language" required>
                        <option value=''> - Select One - </option>
                            <option value="en" selected="selected">English</option>
                            <option value="es">Spanish</option>
                            <option value="fr">French</option>
                            <option value="de">German</option>
                            <option value="nl">Dutch</option>
                            <option value="it">Italian</option>
                            <option value="ru">Russian</option>
                            <option value="pl">Polish</option>
                            <option value="pt">Portuguese</option>
                            <option value="fa">Persian</option>
                            <option value="ko">Korean</option>
                            <option value="ja">Japanese</option>
                            <option value="id">Indonesian</option>
                            <option value="tr">Turkish</option>
                            <option value="ar">Arabic</option>
                            <option value="cn">Simplified Chinese</option>
                            <option value="zh">Traditional Chinese</option>
                            <option value="hi">Hindi</option>
                       </select>
                    </div><br>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="boxType">PaymentBox Coin
                    :</label>
                    <div class="col-sm-5">
                      <select name="gourldefCoin" id="gourldefCoin" placeholder="">
                          
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">A. Product Description:</label>
                    <div class="col-sm-5">
                        <textarea id="gourldefShow" name="gourldefShow"  required placeholder="Product Description"></textarea><br>
                    </div>
                </div> 
                 <div class="form-group">
                    <label class="col-sm-4 control-label" for="username"> B. Product Description:</label>
                    <div class="col-sm-5">
                        <textarea id="gourldefShow" name="gourldefShow"  required placeholder="Product Description"></textarea><br>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Purchase Email - From:</label>
                    <div class="col-sm-5">
                        <input id="gourlemailUserFrom" name="gourlemailUserFrom"  type="text" required placeholder="Product Title"><br>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Purchase Email - Subject:</label>
                    <div class="col-sm-5">
                        <input id="gourlemailUserTitle" name="gourlemailUserTitle"  type="text" required placeholder="Product Title"><br>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Purchase Email - Body:</label>
                    <div class="col-sm-5">
                        <textarea id="gourlemailUserBody" name="gourlemailUserBody"  required placeholder="Product Description"></textarea><br>
                    </div>
                </div> 
                 <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Email to Seller/Admin ?:</label>
                    <div class="col-sm-5">
                        <input id="gourlemailAdmin" name="gourlemailAdmin"  type="text" required placeholder="Product Title"><br>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Sale Notification - From:</label>
                    <div class="col-sm-5">
                        <input id="gourlemailAdminFrom" name="gourlemailAdminFrom"  type="text" required placeholder="Product Title"><br>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Sale Notification - Body:</label>
                    <div class="col-sm-5">
                        <textarea id="gourlemailAdminBody" name="gourlemailAdminBody"  required placeholder="Product Description"></textarea><br>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="username">Sale Notification - To:</label>
                    <div class="col-sm-5">
                        <textarea id="gourlemailAdminTo" name="gourlemailAdminTo"  required placeholder="Product Description"></textarea><br>
                    </div>
                </div>
              
               <input name="ak_action" value="gourlsave_product" type="hidden">
                <div class="form-group">
                    <div class="col-sm-3 col-sm-offset-1">
                       <input class="btn btn-info" type="submit" value="Submit">
                    </div>
                </div>
                
              </form>
                
            </div>
        </div>
        <!-- <div class="row">
          
        </div> -->
    </div>
</div>
            <?php $this->load->view('frontend/footer');?>  