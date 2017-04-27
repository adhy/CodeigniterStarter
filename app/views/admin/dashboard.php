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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?php path_adm()?>/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="<?php path_adm()?>/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?php path_adm()?>/favicon.ico" />
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
                    <h1>Dashboard</h1>
                  </div>
                </div>
              </div>
              <div class="page-content">
                <div class="container">
                  <div class="page-content-inner">
                    <div class="row widget-row">
                      <div class="col-md-3">
                        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                          <h4 class="widget-thumb-heading">All Users</h4>
                          <div class="widget-thumb-wrap">
                            <i class="widget-thumb-icon bg-green icon-users"></i>
                            <div class="widget-thumb-body">
                              <span class="widget-thumb-subtitle"></span>
                              <span class="widget-thumb-body-stat"><?php echo count_users(); ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="col-md-3">
                        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                          <h4 class="widget-thumb-heading">Weekly Sales</h4>
                          <div class="widget-thumb-wrap">
                            <i class="widget-thumb-icon bg-red icon-layers"></i>
                            <div class="widget-thumb-body">
                              <span class="widget-thumb-subtitle">USD</span>
                              <span class="widget-thumb-body-stat" data-counter="counterup" data-value="1,293">0</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                          <h4 class="widget-thumb-heading">Biggest Purchase</h4>
                          <div class="widget-thumb-wrap">
                            <i class="widget-thumb-icon bg-purple icon-screen-desktop"></i>
                            <div class="widget-thumb-body">
                              <span class="widget-thumb-subtitle">USD</span>
                              <span class="widget-thumb-body-stat" data-counter="counterup" data-value="815">0</span>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="col-md-3">
                        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                          <h4 class="widget-thumb-heading">Average Monthly</h4>
                          <div class="widget-thumb-wrap">
                            <i class="widget-thumb-icon bg-blue icon-bar-chart"></i>
                            <div class="widget-thumb-body">
                              <span class="widget-thumb-subtitle">USD</span>
                              <span class="widget-thumb-body-stat" data-counter="counterup" data-value="5,071">0</span>
                            </div>
                          </div>
                        </div>
                      </div> -->
                    </div>
                    <div class="mt-content-body">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <!-- content widget -->
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <!-- content widget -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTAINER -->
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
    <script src="<?php path_adm()?>/global/plugins/moment.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/morris/morris.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/scripts/app.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/pages/scripts/dashboard.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
  </body>
</html>