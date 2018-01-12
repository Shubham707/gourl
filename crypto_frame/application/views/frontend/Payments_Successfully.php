<?php $this->load->view('frontend/headerfront');?>  
<div class="page-content-wrap bg-light">
    <div class="page-content-holder no-padding">
        <div class="page-title">                            
            <h2><a  href="<?php echo base_url();?>index.php/welcome/account">Your Account </a>»   Auto Payments to Your External Wallet Address Statistics </h2>
                          
        </div>
    </div>
</div>          

<div class="page-content-wrap">                    
    <!-- page content holder -->
    <div class="page-content-holder">
        
        <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
            <div class="page-content-wrap bg-light">
            
             </div>
           
            <div class="page-content-wrap bg-light">
            <!-- page content holder -->
                <div class="page-content-holder no-padding">
                    <div class="panel panel-default">
                        <div class="panel-heading">Detailed Search</div>
                        <div class="panel-body">
                            <form>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">Payment Box:</span>
                                            <select name="boxID" class="form-control" placeholder="Payment Box">
                                              <option>Please Select</option>
                                            </select>
                                        </div><br>
                                   
                                        <div class="input-group">
                                            <span class="input-group-addon">Coin Label:</span>
                                            <select name="coinLabel" class="form-control" placeholder="Coin Label">
                                                 <option>Please Select</option>
                                            </select>
                                        </div><br>
                                  
                                        <div class="input-group">
                                            <span class="input-group-addon">Type of Box:</span>
                                            <select name="boxType" class="form-control" placeholder="Type of Box">
                                               <option>Please Select</option>
                                             </select>
                                        </div><br>
                                    
                                        <div class="input-group">
                                            <span class="input-group-addon">User ID:</span>
                                            <input type="text" name="userID" class="form-control" placeholder="User ID">
                                        </div><br>
                                        <div class="col-xs-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">Country:</span>
                                            <select style="width:600% !important;" name="lastcountry" class="form-control">
                                              <option>-- Please Select--</option>
                                              <?php foreach($country as $countries){ ?>
                                              <option><?php echo $countries;?></option>
                                               <?php }?>
                                            </select>
                                        </div>
                                    </div><br>
                                  </div>
                                  <div class="col-xs-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">Save User ID in:</span>
                                            <select name="userFormat" class="form-control" placeholder="Save User ID in">
                                              <option>please select</option>
                                            </select>
                                        </div><br>
                                    
                                        <div class="input-group">
                                            <span class="input-group-addon">Order ID:</span>
                                            <input type="text" name="orderID" class="form-control" placeholder="Order ID">
                                        </div><br>
                                  
                                        <div class="input-group">
                                            <span class="input-group-addon">Amount:</span>
                                            <input type="text" name="amount" class="form-control" placeholder="Amount">-
                                            <input type="text" name="amountii" class="form-control" placeholder="Amount">
                                        </div><br>
                                  
                                        <div class="input-group">
                                            <span class="input-group-addon">Approximate Amount in USD:</span>
                                            <input type="text" name="amountUSD" class="form-control" placeholder="Approximate Amount in USD">-
                                            <input type="text" name="amountUSDii" class="form-control" placeholder="amountUSD">
                                        </div><br>

                                 </div>
                                  <div class="col-xs-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">Payment Valid Period:</span>
                                            <select name="period" class="form-control" placeholder="Payment Valid Period">
                                              <option>Please Select</option>
                                            </select>
                                        </div><br>
                                  
                                        <div class="input-group">
                                            <span class="input-group-addon">Your Internal Wallet Address:</span>
                                            <input type="text" name="addrInt" class="form-control" placeholder="Your Internal Wallet Address">
                                        </div><br>
                                    
                                        <div class="input-group">
                                            <span class="input-group-addon"> Transaction Time:</span>
                                            <input type="text" name="txDate" class="form-control" placeholder="Transaction Time">-
                                             <input type="text" name="txDateii" class="form-control" placeholder="Transaction Time">
                                        </div><br>
                                  
                                        <div class="input-group">
                                            <span class="input-group-addon">Transaction Confirmed:</span>
                                            <select name="txConfirmed" class="form-control" placeholder="Transaction Confirmed">
                                              <option>Please Select</option>
                                              <option>No</option>
                                              <option>Yes</option>
                                            </select>
                                        </div><br>
                                      </div>
                                   <div class="col-xs-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">Transaction ID:</span>
                                            <input type="text" name="txID" class="form-control" placeholder="Transaction ID">
                                        </div><br>
                                   </div>
                                  
                                    
                                   
                                </div>
                                <div class="row">
                                   <div class="col-xs-4">
                                        <div class="input-group">
                                            <input type="reset" name="reset" class="btn btn-info" value="Reset">
                                        </div>
                                      </div>
                                    <div class="col-xs-4">
                                          <input type='hidden' id='filters_search' name='filters_search' value='1'>
                                    
                                        <div class="input-group">
                                            <input type="submit" name="filters_search" class="btn btn-info" value="Search">
                                        </div>
                                    </div>
                                </div>
                                   
                            </form>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>

<!-- 2next -->
<div class="page-content-wrap">                    
    <!-- page content holder -->
    <div class="page-content-holder">
        
        <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
            <div class="page-content-wrap bg-light">
            
             </div>
           
            <div class="page-content-wrap bg-light">
            <!-- page content holder -->
                <div class="page-content-holder no-padding">
                     <table class="table">
                        <thead>
                          <tr>
                            <th>Serial NO</th>
                            <th> No</th>
                            <th>Box Name</th>
                            <th>Amount</th>
                            <th>Approximate Amount in USD</th>
                            <th>Transaction Confirmed ?</th>
                            <th>Order ID</th>
                            <th>User ID</th>
                            <th>Transaction Time</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=1;?>
                          <tr>
                            <td><?php echo $i++;?></td>
                            <td>safsfa</td>
                             <td>sfsf</td>
                            <td>safsaf</td>
                            <td>safsaf</td>
                            <td>asfsaf</td>
                            <td>safdsf</td>
                            <td>safsaf</td>
                            <td>adfaf</td>
                          </tr>      
                        </tbody>
                      </table>
                </div>
             </div>
        </div>
    </div>
</div>

<?php $this->load->view('frontend/footer');?>  