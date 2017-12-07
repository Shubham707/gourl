             <style type="text/css">
                    .error{ color: red; }
                </style> 
                <!-- page content wrapper -->
                <div class="page-content-wrap bg-light">
                    <!-- page content holder -->
                    <div class="page-content-holder no-padding">
                        <!-- page title -->
                        <div class="page-title">                            
                            <h1>Login User</h1>
                            <!-- breadcrumbs -->
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><a href="#">Login</a></li>
                               
                            </ul>               
                            <!-- ./breadcrumbs -->
                        </div>
                        <!-- ./page title -->
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                
                               
                <!-- page content wrapper -->
                <div class="page-content-wrap">                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                        
                        <div class="block-heading this-animate" data-animate="fadeIn">
                            <h2>Login User</h2>
                            <div align="center"><?php echo @$_REQUEST['message'];?></div>
                            <div class="block-heading-text">
                            <form class="cmxform" id="commentForm" method="post" action="<?php echo base_url();?>index.php/login/login_user">
                                     <div class="form-group">
                                <label class="col-sm-4 control-label" for="username"> Email:</label>
                                <div class="col-sm-5">
                                    <input id="email" name="username"  type="text" required placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="password">Password</label>
                                <div class="col-sm-5">
                                   <input id="password" type="password" name="password" placeholder="Password" required>
                                </div><br>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-4">
                                   <input class="submit" type="submit" value="Submit">
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
            
