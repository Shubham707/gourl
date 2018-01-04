<?php $this->load->view('frontend/header');?>
                <div class="page-content-wrap bg-light">
            
                    <div class="page-content-holder no-padding">
                  
                        <div class="page-title">                            
                            <h1>Sign Up User</h1>
                         
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><a href="#">Signup</a></li>
                               
                            </ul>               
                         
                        </div>
                      
                    </div>
                   
                </div>
              
                
                               
           
                <div class="page-content-wrap">                    
                 
                    <div class="page-content-holder">
                        
                        <div class="block-heading this-animate" data-animate="fadeIn">
                            <h2>Sign Up User</h2>
                            <div class="block-heading-text">
                                 <form id="signupForm" method="post" class="form-horizontal" action="<?php echo base_url();?>user/user_save">
                          
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="firstname">First name</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="lastname">Last name</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" />
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="email">Email</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" />
                                </div>
                            </div>
                           
                           

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="password">Password</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="confirm_password">Confirm password</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password" />
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-4">
                                    <button type="submit" class="btn btn-primary" id="signup" name="signup" value="Sign up">Sign up</button>
                                </div>
                            </div>
                        </form>
                            </div>
                        </div>
                   
                                                                 
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                                
            </div>
            <!-- ./page content -->
            
        <?php $this->load->view('frontend/footer');?>