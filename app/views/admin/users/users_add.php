<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); function path_adm(){echo base_url()."content/themes/admin";} ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title><?=$module;?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Restricted Area" name="description" />
    <meta content="Batam Web Media" name="author" />
    <meta name="robots" content="noindex, noarchive, nosnippet, nofollow" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?php path_adm()?>/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="<?php path_adm()?>/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" />
  </head>
  <body class="page-container-bg-solid page-md">
    <div class="page-wrapper">
      <?php $this->load->view('admin/includes/header'); ?>
      <div class="page-wrapper-row full-height">
        <div class="page-wrapper-middle">
          <div class="page-container">
            <div class="page-content-wrapper">
              <div class="page-head">
                <div class="container">
                  <div class="page-title">
                    <h1>Add New User</h1>
                  </div>
                </div>
              </div>
              <div class="page-content">
                <div class="container">
                  <div class="page-content-inner">
                    <div class="row">
                      <div class="col-md-12">
                        <div class=" boxless tabbable-reversed">
                          <div class="tab-content">
                            <div class="tab-pane active" id="tab_0">
                              <div class="portlet box green">
                                <div class="portlet-title">
                                  <div class="caption">
                                    <i class="fa fa-user"></i>Create a brand new user and add them to this site.
                                  </div>
                                </div>
                                <div class="portlet-body form">
                                  <form method="post" action="<?php echo site_url()?>admin/AuthAdmin/create_user" class="form-horizontal">
                                    <div class="form-body">
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">First Name</label>
                                        <div class="col-md-4">
                                          <input type="text" class="form-control input-circle" name="first_name">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-body">
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Last Name</label>
                                        <div class="col-md-4">
                                          <input type="text" class="form-control input-circle" name="last_name">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-body">
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Email</label>
                                        <div class="col-md-4">
                                          <input type="text" class="form-control input-circle" name="email">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-body">
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Password</label>
                                        <div class="col-md-4">
                                          <input type="text" class="form-control input-circle" name="password">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-body">
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Confirm Password</label>
                                        <div class="col-md-4">
                                          <input type="text" class="form-control input-circle" name="password_confirm">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-actions">
                                      <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                          <button type="submit" class="btn btn-circle green">Submit</button>
                                        </div>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php $this->load->view('admin/includes/footer'); ?>
    </div>
    <div class="quick-nav-overlay"></div>
    <script src="<?php path_adm()?>/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/scripts/app.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/pages/scripts/form-samples.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
  </body>
</html>