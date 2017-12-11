<!-- page footer -->
            <div class="page-footer">
                
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-dark-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder page-footer-holder-main">
                                                
                        <div class="row">
                            
                            <!-- about -->
                            <div class="col-md-3">
                                <h3>About Template</h3>
                                <p>Lorem ipsum dolor natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                            </div>
                            <!-- ./about -->
                            
                            <!-- quick links -->
                            <div class="col-md-3">
                                <h3>Quick links</h3>
                                
                                <div class="list-links">
                                    <a href="#">Home</a>                                    
                                    <a href="#">Pages</a>
                                    <a href="#">Portfolio</a>
                                    <a href="#">Shortcodes</a>
                                </div>                                
                            </div>
                            <!-- ./quick links -->
                            
                            <!-- recent tweets -->
                            <div class="col-md-3">
                                <h3>Recent Tweets</h3>
                                
                                <div class="list-with-icon small">
                                    <div class="item">
                                        <div class="icon">
                                            <span class="fa fa-twitter"></span>
                                        </div>
                                        <div class="text">
                                            <a href="#">@JohnDoe</a> Hello, here is my new front-end template. Check it out
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <span class="fa fa-twitter"></span>
                                        </div>
                                        <div class="text">
                                            <a href="#">@Aqvatarius</a> Release of new update for Atlant is done and ready to use
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <span class="fa fa-twitter"></span>
                                        </div>
                                        <div class="text">
                                            <a href="#">@Aqvatarius</a> Check out my new admin template Atlant, it's realy awesome template
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- ./recent tweets -->
                            
                            <!-- contacts -->
                            <div class="col-md-3">
                                <h3>Contacts</h3>
                                
                                <div class="footer-contacts">
                                    <div class="fc-row">
                                        <span class="fa fa-home"></span>
                                        000 StreetName, Suite 111,<br/> 
                                        City Name, ST 01234
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-phone"></span>
                                        (123) 456-7890
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-envelope"></span>
                                        <strong>John Doe</strong><br>
                                        <a href="mailto:#">johndoe@domain.com</a>
                                    </div>                                    
                                </div>
                                
                                <h3>Subscribe</h3>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Your email"/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><span class="fa fa-paper-plane"></span></button>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- ./contacts -->
                            
                        </div>
                        
                    </div>
                    <!-- ./page footer holder -->
                </div>
                <!-- ./page footer wrap -->
                
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-darken-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder">
                        
                        <!-- copyright -->
                        <div class="copyright">
                            &copy; 2014 Atlant Theme by <a href="#">Aqvatarius</a> - All Rights Reserved                            
                        </div>
                        <!-- ./copyright -->
                        
                        <!-- social links -->
                        <div class="social-links">
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                            <a href="#"><span class="fa fa-vimeo-square"></span></a>
                            <a href="#"><span class="fa fa-dribbble"></span></a>
                        </div>                        
                        <!-- ./social links -->
                        
                    </div>
                    <!-- ./page footer holder -->
                </div>
                <!-- ./page footer wrap -->
                
            </div>
            <!-- ./page footer -->
            
        </div>        
        <!-- ./page container -->
        
        <!-- page scripts -->
        <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/plugins/bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/plugins/mixitup/jquery.mixitup.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/plugins/appear/jquery.appear.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/plugins/revolution-slider/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/plugins/revolution-slider/jquery.themepunch.revolution.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/actions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/slider.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>backend/js/plugins/datatables/jquery.dataTables.min.js"></script> 
        <!-- ./page scripts -->
        <!-- validation -->
    <script type="text/javascript" src="<?php echo base_url();?>/assets/validation/dist/jquery.validate.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/cryptobox.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>/assets/frontend/js/cryptobox.min.js"></script>
       <script type="text/javascript" src="<?php echo base_url();?>/assets/country.js"></script>
       <script type="text/javascript">
       

        $( document ).ready( function () {
            $( "#signupForm" ).validate( {
                rules: {
                    title: "required",
                    firstname: "required",
                    lastname: "required",
                    country: "required",
                    state: "required",
                    city: "required",
                    username: {
                        required: true,
                        minlength: 2
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    confirm_password: {
                        required: true,
                        minlength: 5,
                        equalTo: "#password"
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    agree: "required"
                },
                messages: {
                    title: "Please enter your title",
                    firstname: "Please enter your firstname",
                    lastname: "Please enter your lastname",
                    country: "Please enter your Country",
                    state: "Please enter your State",
                    city: "Please enter your City",
                    username: {
                        required: "Please enter a username",
                        minlength: "Your username must consist of at least 2 characters"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    confirm_password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long",
                        equalTo: "Please enter the same password as above"
                    },
                    email: "Please enter a valid email address",
                    agree: "Please accept our policy"
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
        </script>
        <script>
   
    $(document).ready(function() {
        // validate the comment form when it is submitted
        $("#commentForm").validate();

        // validate signup form on keyup and submit
        $("#signupForm").validate({
            rules: {
                firstname: "required",
                lastname: "required",
                username: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                },
                topic: {
                    required: "#newsletter:checked",
                    minlength: 2
                },
                agree: "required"
            },
            messages: {
                firstname: "Please enter your firstname",
                lastname: "Please enter your lastname",
                username: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                confirm_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                },
                email: "Please enter a valid email address",
                agree: "Please accept our policy",
                topic: "Please select at least 2 topics"
            }
        });

        // propose username by combining first- and lastname
        $("#username").focus(function() {
            var firstname = $("#firstname").val();
            var lastname = $("#lastname").val();
            if (firstname && lastname && !this.value) {
                this.value = firstname + "." + lastname;
            }
        });

        //code to hide topic selection, disable for demo
        var newsletter = $("#newsletter");
        // newsletter topics are optional, hide at first
        var inital = newsletter.is(":checked");
        var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
        var topicInputs = topics.find("input").attr("disabled", !inital);
        // show when newsletter is checked
        newsletter.click(function() {
            topics[this.checked ? "removeClass" : "addClass"]("gray");
            topicInputs.attr("disabled", !this.checked);
        });
    });
    </script>
        <script language="javascript">
            populateCountries("country", "state");
            populateCountries("country2");
        </script>
    </body>
</html>






