<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Paycrypt</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/frontend/css/revolution-slider/extralayers.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/frontend/css/revolution-slider/settings.css" media="screen" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/frontend/css/styles.css" media="screen" />                  
        
    </head>
    <body>
        <div class="page-container">
            <div class="page-header">
                <div class="page-header-holder">
                    <div class="logo" style="">
                        <a href="<?php echo site_url();?>/welcome">Paycrypt.io</a>
                    </div>
                    <div class="navigation-toggle">
                        <div class="navigation-toggle-button"><span class="fa fa-bars"></span></div>
                    </div>
                    <ul class="navigation">
                        <li>
                            <a href="<?php echo site_url();?>welcome/index_default">Home</a>
                            
                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <ul>
                                <li><a href="<?php echo site_url();?>welcome/about_us">About Us</a></li>
                                <li><a href="<?php echo site_url();?>welcome/contacts">Contacts</a></li>
                                <li><a href="<?php echo site_url();?>welcome/pricing">Pricing</a></li>
                                <li><a href="<?php echo site_url();?>welcome/paid-user">Paid User</a></li>
                                <li><a href="<?php echo site_url();?>payment/new_payment"> New Payment</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                            <ul>
                                <li><a href="<?php echo site_url();?>welcome/blog_grid">Blog Grid</a></li>
                                <li><a href="<?php echo site_url();?>welcome/blog_post">Blog Post</a></li>                                
                            </ul>
                        </li>
                        <li>
                            <a href="#">Multi Currency</a>
                            <ul>
                                <li><a href="<?php echo site_url();?>welcome/pay_per_post">Pay Per Post</a></li>
                                <li><a href="<?php echo site_url();?>product/pay-product-online">Pay Per Product</a></li>
                                <li><a href="<?php echo site_url();?>membership/pay-per-membership">Pay per Membership</a></li>
                                <li><a href="<?php echo site_url();?>account/public_key">Account Key</a></li>
                                <li><a href="<?php echo site_url();?>account/my-account">My account</a></li>
                                <li><a href="<?php echo site_url();?>payment/add-payment">Payment</a></li>
                                <li><a href="<?php echo site_url();?>payment/multi-payment-post-coin">Pay Multi Post</a></li>
                           
                            </ul>
                        </li>

                        <li><a href="<?php echo site_url();?>user/login">Login</a>
                        </li>
                        <li><a href="<?php echo site_url();?>user/signup">Signup</a>
                        </li>
                         <li><a href="<?php echo site_url();?>login/logout">Logout</a>
                        </li>
                        <li><a href="<?= base_url('multicurrency');?>"><button class="btn btn-primary" style="margin-top:30px; background-color: blue;"><strong style="color:red;">
                            <?php $i = 1;  foreach ($this->cart->contents() as $items){ echo $items['qty']; } ?>
                            </strong><svg class="_3oJBMI" width="16" height="16" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg" data-reactid="85"><path class="" d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86" fill="#fff" data-reactid="86"></path></svg> <strong>Buy</strong></button></a></li>
                    </ul>
                </div>
            </div>
        <div class="page-content">
                