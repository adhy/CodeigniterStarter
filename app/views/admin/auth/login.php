<?php
  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
  function path_adm(){echo base_url()."content/themes/admin";}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Login Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Restricted Area" name="description" />
    <meta content="Batam Web Media" name="author" />
    <meta name="robots" content="noindex, noarchive, nosnippet, nofollow" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?php path_adm()?>/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?php path_adm()?>/favicon.ico" />
  </head>
  <body class=" login">
    <div class="user-login-5">
      <div class="row bs-reset">
        <div class="col-md-6 bs-reset mt-login-5-bsfix">
          <div class="login-bg" style="background-image:url(<?php path_adm() ?>/pages/img/login/bg1.jpg)">
            <img class="login-logo" src="https://batamwebmedia.com/assets/images/logob-trg.png" style="width: 50%;" /> 
          </div>
        </div>
        <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
          <div class="login-content">
            <h1>Admin Login</h1>
            <div id="infoMessage"><p><?php echo $message;?></p></div>
            <form action="<?=base_url();?>admin/AuthAdmin/login" class="login-form" method="post">
              <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>Enter any username and password. </span>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="identity" required/> 
                </div>
                <div class="col-xs-6">
                  <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="password" required/> 
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="rem-password">
                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> Remember me
                    <span></span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-8 text-right">
                  <div class="forgot-password">
                    <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                  </div>
                  <button class="btn green" type="submit">Sign In</button>
                </div>
              </div>
            </form>
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="<?=base_url();?>admin/AuthAdmin/forgot_password" method="post">
              <h3 class="font-green">Forgot Password ?</h3>
              <p> Enter your e-mail address below to reset your password. </p>
              <div class="form-group">
                <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="identity" /> 
              </div>
              <div class="form-actions">
                <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
              </div>
            </form>
          </div>
          <div class="login-footer">
            <div class="row bs-reset">
              <div class="col-xs-7 bs-reset">
                <div class="login-copyright text-right">
                  <p>Copyright &copy; <a href="https://batamwebmedia.com" target="_blank">Batam Web Media</a> 2015 - <?=date('Y');?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php path_adm() ?>/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?php path_adm() ?>/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php path_adm() ?>/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="<?php path_adm() ?>/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php path_adm() ?>/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?php path_adm() ?>/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="<?php path_adm() ?>/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php path_adm() ?>/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="<?php path_adm() ?>/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php path_adm() ?>/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
    <script src="<?php path_adm() ?>/global/scripts/app.min.js" type="text/javascript"></script>
    <script src="<?php path_adm() ?>/pages/scripts/login-5.min.js" type="text/javascript"></script>
  </body>
</html>