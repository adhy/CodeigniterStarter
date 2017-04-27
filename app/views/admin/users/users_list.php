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
    <link href="<?php path_adm()?>/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
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
                    <h1>User List</h1>
                  </div>
                </div>
              </div>
              <div class="page-content">
                <div class="container">
                  <div class="page-content-inner">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="portlet light ">
                          <div class="portlet-title">
                            <div class="caption font-dark">
                              <i class="icon-settings font-dark"></i>
                              <span class="caption-subject bold uppercase">User List</span>
                            </div>
                            <div class="actions">
                              <a href="<?=base_url();?>admin/users/add"><label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                              Add New User</label></a>
                            </div>
                          </div>
                          <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                              <thead>
                                <tr class="">
                                  <th style="width: 5%;"> # </th>
                                  <th style="width: 10%;"> Avatar </th>
                                  <th> Full Name </th>
                                  <th> Email </th>
                                  <th> Status </th>
                                  <th> Role </th>
                                  <th> Action </th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach ($users as $user):?>
                                <tr>
                                  <td> <?=$i;?> </td>
                                  <td>
                                    <?php if ($user->avatar == NULL || !file_exists('./content/media/users/'.$user->avatar) == TRUE) {?>
                                    <img class="img-responsive" src="http://www.placehold.it/150x150/EFEFEF/AAAAAA&amp;text=no+image">
                                    <?php }else{ ?>
                                    <img class="img-responsive" src="<?=base_url();?>content/media/users/<?=$user->avatar;?>" style="width: 100%;height: 9%;">
                                    <?php }?>
                                  </td>
                                  <td> <?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?> <?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                                  <td> <?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?> </td>
                                  <td> 
                                    <?php if ($user->active) { echo "<a href='" . base_url() ."admin/AuthAdmin/deactivate/" . $user->id . "'><span class='label label-success'>Active</span></a>";}else{ echo "<a href='" . base_url() ."admin/AuthAdmin/deactivate/" . $user->id . "'><span class='label label-danger'>Deactive</span></a>";} ?>
                                  </td>
                                  <td> 
                                    <?php foreach ($user->groups as $group):?>
                                    <?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8') ;?><br />
                                    <?php endforeach?>
                                  </td>
                                  <td> 
                                    <a href="<?=base_url();?>admin/users/detail/<?=$user->id;?>" class="btn btn-sm blue"><i class="fa fa-edit"></i> Edit </a>
                                  </td>
                                </tr>
                                <?php $i++; endforeach;?>
                              </tbody>
                            </table>
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
    <script src="<?php path_adm()?>/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/scripts/app.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/pages/scripts/table-datatables-fixedheader.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
  </body>
</html>