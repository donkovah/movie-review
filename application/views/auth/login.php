<!doctype html>
<html class="fixed">
  <head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <meta name="keywords" content="Rovedana Movie-Review" />
    <meta name="description" content="Rovedana Movie-Revie">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="<?php echo base_url(); ?>assets/vendor/modernizr/modernizr.js"></script>
  </head>
  <body>
    <!-- start: page -->
    <section class="body-sign">
      <div class="center-sign">
        <a href="<?php echo base_url(); ?>" class="logo pull-left">
          <h3>Review</h3>
        </a>

        <div class="panel panel-sign">
          <div class="panel-title-sign mt-xl text-right">
            <h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
          </div>
          <div class="panel-body">
            <form action="<?php echo base_url(); ?>auth/login" method="post">
              <div class="form-group mb-lg">
                <label for="identity">Email</label>
                <div class="input-group input-group-icon">
                  <input 
                    name="identity" 
                    type="text" 
                    class="form-control input-lg"  
                    />
                  <span class="input-group-addon">
                    <span class="icon icon-lg">
                      <i class="fa fa-user"></i>
                    </span>
                  </span>
                </div>
              </div>

              <div class="form-group mb-lg">
                <div class="clearfix">
                  <label class="pull-left" for="password">Password</label>
                  <a href="forgot_password" class="pull-right">Lost Password?</a>
                </div>
                <div class="input-group input-group-icon">
                  <input name="password" type="password" id="password" class="form-control input-lg" />
                  <span class="input-group-addon">
                    <span class="icon icon-lg">
                      <i class="fa fa-lock"></i>
                    </span>
                  </span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-8">
                  <div class="checkbox-custom checkbox-default">
                    <input id="RememberMe" name="rememberme" type="checkbox" value="1" />
                    <label for="RememberMe">Remember Me</label>
                  </div>
                </div>
                <div class="col-sm-4 text-right">
                  <button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
                  <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
                </div>
              </div>

              <span class="mt-lg mb-lg line-thru text-center text-uppercase">
                <span>or</span>
              </span>

              <p class="text-center">Don't have an account yet? <a href="<?php echo base_url().'auth/register' ?>">Sign Up!</a>

            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- end: page -->

    <!-- Vendor -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo base_url(); ?>assets/javascripts/theme.js"></script>
    
    <!-- Theme Custom -->
    <script src="<?php echo base_url(); ?>assets/javascripts/theme.custom.js"></script>
    
    <!-- Theme Initialization Files -->
    <script src="<?php echo base_url(); ?>assets/javascripts/theme.init.js"></script>

  </body>
</html>