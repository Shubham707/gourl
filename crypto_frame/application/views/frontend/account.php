
                <!-- page content wrapper -->
                <div class="page-content-wrap bg-light">
                    <!-- page content holder -->
                    <div class="page-content-holder no-padding">
                        <!-- page title -->
                        <div class="page-title">                            
                            <h1>User Account Update<?php //echo $user_id;?></h1>
                            <!-- breadcrumbs -->
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><a href="#">Update</a></li>
                               
                            </ul>               
                            <!-- ./breadcrumbs -->
                        </div>
                        <!-- ./page title -->
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->

                <?php //if($firstname) echo $firstname; else echo "afaf"; ?>
                               
                <!-- page content wrapper -->
                <div class="page-content-wrap">
                 <div class="page-content-holder"> 
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#Update">UPDATE</a></li>
                    <li><a data-toggle="tab" href="#view">DETAILS</a></li>
                </ul>

                  <div class="tab-content">
                    <div id="Update" class="tab-pane fade in active">
                      <h3>Update</h3>
                      <form id="signupForm" method="post" class="form-horizontal" action="lib/update_acount.php">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="firstname">Title:</label>
                                <div class="col-sm-5">
                                    <select class="form-control" id="title" name="title" placeholder="Title">
                                     
                                        <option value=""> - Select Title - </option>
                                        <option value="Mr."> Mr.</option>
                                        <option value="Miss"> Miss</option>
                                        <option value="Mrs."> Mrs.</option>
                                        <option value="Ms."> Ms.</option>
                                        <option value="Dr."> Dr.</option>
                                        <option value="Prof."> Prof.</option>
                                    </select>
                                </div>
                            </div>
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
                                <label class="col-sm-4 control-label" for="email">Position: </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="position" name="position" placeholder="Position" />
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-4 control-label" for="email">Company Name (Optional):  </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name (Optional)" />
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-4 control-label" for="email">Company Website: </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="company_website" name="company_website" placeholder="Company Website" />
                                </div>
                            </div>
                           
                           
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">Country:</label>
                                <div class="col-sm-5">
                                    <select class="form-control" id="country" name="country" placeholder="Country"></select>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">State:</label>
                                <div class="col-sm-5">
                                    <select class="form-control" id="state" name="state" placeholder="State"></select>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">City:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="city" name="city" placeholder="City">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">Phone:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" />
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">Avatar/Photo:</label>
                                <div class="col-sm-5">
                                    <input type="file" class="form-control" id="photo" name="photo" placeholder="Avatar/Photo" />
                                    <a href="lib/removeimage.php?id=1" class="btn btn-primary" name="remove">Remove Image</a>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">Nick Name:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Nick Name" />
                                </div>
                            </div>
                               <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">Password:</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">Re-type Password:</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Re-type Password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">Url Monetiser - Email Notifications:</label>
                               <div class="col-md-2">
                                    <input type="radio" class="form-control" id="monetiser" name="username"/>No
                                </div>
                                <div class="col-md-2">
                                    <input type="radio" class="form-control" id="monetiser" name="username" />YES
                                    </div>
                                
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">Affiliate Program - Email Notifications:</label>
                                <div class="col-md-2">
                                    <input type="radio" class="form-control" id="affiliate" name="affiliate" placeholder="Affiliate Program - Email Notifications" />NO
                                </div>
                                <div class="col-md-2">
                                    <input type="radio" class="form-control" id="affiliate" name="affiliate" placeholder="Affiliate Program - Email Notifications" />YES
                                 </div>   
                             
                            </div>
                            
                             <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">Receive Email Newsletter</label>
                                <div class="col-md-2">
                                    <input type="radio" class="form-control" id="notifications" name="notifications" placeholder="Affiliate Program - Email Notifications" />NO
                                </div>
                                <div class="col-md-2">
                                    <input type="radio" class="form-control" id="notifications" name="notifications" placeholder="Affiliate Program - Email Notifications" />YES
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-4">
                                    <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="view" class="tab-pane fade">
                      <h3>Details</h3>
                      <form id="signupForm" method="post" class="form-horizontal" action="lib/update_acount.php">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="firstname">Title:</label>
                                <div class="col-sm-5">
                                    <select class="form-control" id="title" name="title" placeholder="Title">
                                     
                                        <option value=""> - Select Title - </option>
                                        <option value="Mr."> Mr.</option>
                                        <option value="Miss"> Miss</option>
                                        <option value="Mrs."> Mrs.</option>
                                        <option value="Ms."> Ms.</option>
                                        <option value="Dr."> Dr.</option>
                                        <option value="Prof."> Prof.</option>
                                    </select>
                                </div>
                            </div>
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
                                <label class="col-sm-4 control-label" for="email">Position: </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="position" name="position" placeholder="Position" />
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-4 control-label" for="email">Company Name (Optional):  </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name (Optional)" />
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-4 control-label" for="email">Company Website: </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="company_website" name="company_website" placeholder="Company Website" />
                                </div>
                            </div>
                           
                           
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">Country:</label>
                                <div class="col-sm-5">
                                    <select class="form-control" id="country" name="country" placeholder="Country"></select>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">State:</label>
                                <div class="col-sm-5">
                                    <select class="form-control" id="state" name="state" placeholder="State"></select>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">City:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="city" name="city" placeholder="City">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">Phone:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" />
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">Avatar/Photo:</label>
                                <div class="col-sm-5">
                                    <input type="file" class="form-control" id="photo" name="photo" placeholder="Avatar/Photo" />
                                    <a href="lib/removeimage.php?id=1" class="btn btn-primary" name="remove">Remove Image</a>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">Nick Name:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Nick Name" />
                                </div>
                            </div>
                               <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">Password:</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">Re-type Password:</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Re-type Password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">Url Monetiser - Email Notifications:</label>
                               <div class="col-md-2">
                                    <input type="radio" class="form-control" id="monetiser" name="username"/>No
                                </div>
                                <div class="col-md-2">
                                    <input type="radio" class="form-control" id="monetiser" name="username" />YES
                                    </div>
                                
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">Affiliate Program - Email Notifications:</label>
                                <div class="col-md-2">
                                    <input type="radio" class="form-control" id="affiliate" name="affiliate" placeholder="Affiliate Program - Email Notifications" />NO
                                </div>
                                <div class="col-md-2">
                                    <input type="radio" class="form-control" id="affiliate" name="affiliate" placeholder="Affiliate Program - Email Notifications" />YES
                                 </div>   
                             
                            </div>
                            
                             <div class="form-group">
                                <label class="col-sm-4 control-label" for="username">Receive Email Newsletter</label>
                                <div class="col-md-2">
                                    <input type="radio" class="form-control" id="notifications" name="notifications" placeholder="Affiliate Program - Email Notifications" />NO
                                </div>
                                <div class="col-md-2">
                                    <input type="radio" class="form-control" id="notifications" name="notifications" placeholder="Affiliate Program - Email Notifications" />YES
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-4">
                                    <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>                   
                    <!-- page content holder -->
                   
                        
                        <div class="block-heading this-animate" data-animate="fadeIn">
                            <h2></h2>
                            <div class="block-heading-text">
                              
                            </div>
                        </div>
                   
                                                                 
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                                
            </div>
            <!-- ./page content -->
            
