<!doctype html>
<html class="fixed">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <title>TaxiTManager</title>
        <meta name="keywords" content="Client Manager System Lagos Nigeria Africa TaxiTManager" />
        <meta name="description" content="TaxiTManager - Client Management System">
        <meta name="author" content="Oluwasegun Kesington">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.css" />

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="{{asset ('assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/morris/morris.css" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme.css" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/skins/default.css" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme-custom.css">

        <!-- toastr -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        @yield('css')


        <!-- Head Libs -->
        <script src="<?php echo base_url(); ?>assets/vendor/modernizr/modernizr.js"></script>
    </head>
    <body>
        <section class="body">
            <!-- start: header -->
            <header class="header">
                <div class="logo-container">
                    <h4><a 
                        href="<?php echo base_url(); ?>" 
                        class="logo">
                        Review App
                    </a></h4>
                    <div 
                        class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" 
                        data-fire-event="sidebar-left-opened">
                        <i 
                            class="fa fa-bars" 
                            aria-label="Toggle sidebar">
                        </i>
                    </div>
                </div>
            
                <!-- start: search & user box -->
                <div class="header-right">
            
                    <span class="separator"></span>
            
                    <div id="userbox" class="userbox" style="margin-top: -20px;">
                        <a href="#" data-toggle="dropdown">
                            <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                                <span class="name">Oluwasegun Kesington</span>
                                <!-- <span class="role">administrator</span> -->
                            </div>
            
                            <i class="fa custom-caret"></i>
                        </a>
            
                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li class="divider"></li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"></i> Logout
                                    </a>

                                    <form id="logout-form" action="<?php echo base_url().'auth/logout'; ?>" method="POST" style="display: none;">
                                        @csrf
                                    </form>



                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end: search & user box -->
            </header>
            <!-- end: header -->
