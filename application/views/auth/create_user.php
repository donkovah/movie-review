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

    <section class="body-sign">
      <div class="center-sign">
        <a href="/" class="logo pull-left">
          <h3>Review</h3>
        </a>

        <div class="panel panel-sign">
          <div class="panel-title-sign mt-xl text-right">
            <h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Sign Up</h2>
          </div>
          <div class="panel-body">
            <div id="infoMessage"><?php echo $message;?></div>
            <form 
              action="<?php echo base_url().'auth/register'; ?>" 
              method="Post">
              <div class="form-group mb-lg">
                <label>First Name</label>
                <input name="first_name" type="text" class="form-control input-lg" />
              </div>

              <div class="form-group mb-lg">
                <label>Last Name</label>
                <input name="last_name" type="text" class="form-control input-lg" />
              </div>

              <div class="form-group mb-lg">
                <label>E-mail Address</label>
                <input name="email" type="email" class="form-control input-lg" />
              </div>

              <div class="form-group mb-none">
                <div class="row">
                  <div class="col-sm-6 mb-lg">
                    <label>Password</label>
                    <input name="password" type="password" class="form-control input-lg" />
                  </div>
                  <div class="col-sm-6 mb-lg">
                    <label>Password Confirmation</label>
                    <input name="password_confirm" type="password" class="form-control input-lg" />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-8">
                  <div class="checkbox-custom checkbox-default">
                    <input id="AgreeTerms" name="agreeterms" type="checkbox"/>
                    <label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>
                  </div>
                </div>
                <div class="col-sm-4 text-right">
                  <button type="submit" class="btn btn-primary hidden-xs">Sign Up</button>
                  <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign Up</button>
                </div>
              </div>

              <span class="mt-lg mb-lg line-thru text-center text-uppercase">
                <span>or</span>
              </span>

              <p class="text-center">Already have an account? <a href="<?php echo base_url().'auth/login' ?>">Sign In!</a>

            </form>
          </div>
        </div>

        <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2014. All Rights Reserved.</p>
      </div>
    </section>

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
