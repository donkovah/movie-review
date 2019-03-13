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

            <?php $this->load->view('partials/header'); ?>
            <div class="inner-wrapper">
            <?php $this->load->view('partials/sidebar'); ?>
        <section role="main" class="content-body sec-body">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')}}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('assets/stylesheets/theme.css')}}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('assets/stylesheets/skins/default.css')}}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/stylesheets/theme-custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('assets/vendor/modernizr/modernizr.js')}}"></script>

    <!-- start: page -->
    <section class="panel" id="sectionBody">
        <header class="panel-heading">
            <div class="panel-actions">
                        <button id="clickBankModal" 
                            class="btn-success mb-xs mt-xs mr-xs btn btn-xs pull-right" 
                            data-target="#newBankModal" 
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title="Add New Bank">
                                <i class="fa fa-plus"></i> Add New</button>
            </div>
            <h2 class="panel-title">Banks</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                    <tr>
                        <th width="5%">S/N</th>
                        <th width="10%">Name</th>
                        <th width="15%">Account</th>
                        <th width="15%">Balance</th>
                        <th width="15%">Officer</th>
                        <th width="10%">Number</th>
                        <th width="15%">Email</th>
                        <th width="15%">Update</th>
                    </tr>
                </thead>                
                <tbody>
                    <tr>
                        <td>
                            {{$loop->iteration}}
                        </td>

                        <td>                    
                            {{$bank->name}} {{$bank->label}} {{$bank->currency->name}}
                        </td>
                        <td>                    
                            {{$bank->acc_number}}
                        </td>
                        <td>                    
                            {{$bank->currency->name.number_format($bank->balance,2)}}
                        </td>
                        <td>                    
                            {{$bank->acc_officer}}
                        </td>
                        <td>                    
                            {{$bank->acc_officer_number}}
                        </td>
                        <td>                    
                            {{$bank->acc_officer_email}}
                        </td>
                        <td>
                            <button 
                            id="clickUpdateBankModal" 
                            class="mb-xs mt-xs mr-xs btn btn-xs btn-info" 
                            data-target="#updateBankModal" 
                            data-id= "{{$bank->id}}"
                            data-name= "{{$bank->name}}"
                            data-officer= "{{$bank->acc_officer}}"
                            data-number= "{{$bank->acc_officer_number}}"
                            data-email= "{{$bank->acc_officer_email}}"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title="Update Bank Balance">
                                <i class="fa fa-edit"></i>
                            </button> &nbsp;
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
        </section>
            </div>
            <aside id="sidebar-right" class="sidebar-right">
                <div class="nano">
                    <div class="nano-content">
                        <a href="#" class="mobile-close visible-xs">
                            Collapse <i class="fa fa-chevron-right"></i>
                        </a>
            
                        <div class="sidebar-right-wrapper">
            
                            <div class="sidebar-widget widget-calendar">
                                <h6>Upcoming Tasks</h6>
                                <div data-plugin-datepicker data-plugin-skin="dark" ></div>
            
                                <ul>
                                    <li>
                                        <time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
                                        <span>Company Meeting</span>
                                    </li>
                                </ul>
                            </div>
            
                            <div class="sidebar-widget widget-friends">
                                <h6>Friends</h6>
                                <ul>
                                    <li class="status-online">
                                        <figure class="profile-picture">
                                            <img src="<?php echo base_url(); ?>assets/images/!sample-user.jpg')}}" alt="Joseph Doe" class="img-circle">
                                        </figure>
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                    <li class="status-online">
                                        <figure class="profile-picture">
                                            <img src="<?php echo base_url(); ?>assets/images/!sample-user.jpg')}}" alt="Joseph Doe" class="img-circle">
                                        </figure>
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                    <li class="status-offline">
                                        <figure class="profile-picture">
                                            <img src="<?php echo base_url(); ?>assets/images/!sample-user.jpg')}}" alt="Joseph Doe" class="img-circle">
                                        </figure>
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                    <li class="status-offline">
                                        <figure class="profile-picture">
                                            <img src="<?php echo base_url(); ?>assets/images/!sample-user.jpg')}}" alt="Joseph Doe" class="img-circle">
                                        </figure>
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
            
                        </div>
                    </div>
                </div>
            </aside>
        </section>

        <!-- Vendor -->
        <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/nanoscroller/nanoscroller.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
        
        <!-- Specific Page Vendor -->
        <script src="<?php echo base_url(); ?>assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jquery-appear/jquery.appear.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/flot/jquery.flot.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/flot/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/flot/jquery.flot.categories.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/flot/jquery.flot.resize.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/raphael/raphael.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/morris/morris.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/gauge/gauge.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/snap-svg/snap.svg.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/liquid-meter/liquid.meter.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jqvmap/jquery.vmap.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

        <!-- toastr -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        
        @yield('js')
        
        <!-- Theme Base, Components and Settings -->
        <script src="<?php echo base_url(); ?>assets/javascripts/theme.js"></script>
        
        <!-- Theme Custom -->
        <script src="<?php echo base_url(); ?>assets/javascripts/theme.custom.js"></script>
        
        <!-- Theme Initialization Files -->
        <script src="<?php echo base_url(); ?>assets/javascripts/theme.init.js"></script>
        
        @if(session('status'))
        <script type="text/javascript">
            toastr.options = {
              "closeButton": true,
              "debug": false,
              "newestOnTop": false,
              "progressBar": false,
              "positionClass": "toast-bottom-right",
              "preventDuplicates": false,
              "onclick": null,
              "showDuration": "300",
              "hideDuration": "1000",
              "timeOut": "3000",
              "extendedTimeOut": "1000",
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            }
             // toastr["success"]("This is a message", "Success");
            toastr.{{session('status.type')}}(
                '{{session('status.message')}}', '{{session('status.titl')}}');
        </script>
        @endif

        <!-- Examples -->
        <!-- <script src="<?php echo base_url(); ?>assets/javascripts/dashboard/examples.dashboard.js"></script> -->
    </body>
</html>