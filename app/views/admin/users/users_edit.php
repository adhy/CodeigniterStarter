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
    <link href="<?php path_adm()?>/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?php path_adm()?>/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php path_adm()?>/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
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
                    <h1> Edit User </h1>
                  </div>
                </div>
              </div>
              <div class="page-content">
                <div class="container">
                  <div class="page-content-inner">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="profile-sidebar">
                          <div class="portlet light profile-sidebar-portlet ">
                            <div class="profile-userpic">
                              <?php if ($detail[0]->avatar == NULL || !file_exists('./content/media/users/'.$detail[0]->avatar) == TRUE) {?>
                              <img class="img-responsive" src="http://www.placehold.it/150x150/EFEFEF/AAAAAA&amp;text=no+image">
                              <?php }else{ ?>
                              <img class="img-responsive" src="<?=base_url();?>content/media/users/<?=$detail[0]->avatar;?>">
                              <?php }?>
                            </div>
                            <div class="profile-usertitle">
                              <div class="profile-usertitle-name"> <?=$detail[0]->first_name;?>&nbsp;<?=$detail[0]->last_name;?> </div>
                              <div class="profile-usertitle-job"> <?=$detail[0]->role;?> </div>
                            </div>
                            <br>
                          </div>
                        </div>
                        <div class="profile-content">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="portlet light ">
                                <div class="portlet-title tabbable-line">
                                  <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                  </div>
                                  <ul class="nav nav-tabs">
                                    <li class="active">
                                      <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                    </li>
                                    <li>
                                      <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                    </li>
                                    <li>
                                      <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="portlet-body">
                                  <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->
                                    <div class="tab-pane active" id="tab_1_1">
                                      <form role="form" action="<?=base_url();?>admin/users/update" method="post">
                                        <input type="hidden" name="user_id" value="<?=$detail[0]->id;?>">
                                        <div class="form-group">
                                          <label class="control-label">First Name</label>
                                          <input type="text" name="first_name" class="form-control" value="<?=$detail[0]->first_name;?>" /> 
                                        </div>
                                        <div class="form-group">
                                          <label class="control-label">Last Name</label>
                                          <input type="text" name="last_name" class="form-control" value="<?=$detail[0]->last_name;?>" /> 
                                        </div>
                                        <div class="form-group">
                                          <label class="control-label">Mobile Number</label>
                                          <input type="text" name="phone" class="form-control" value="<?=$detail[0]->phone;?>" /> 
                                        </div>
                                        <div class="margiv-top-10">
                                          <button class="btn green" type="submit">Save Changes</button>
                                          <!-- <a href="javascript:;" class="btn green"> Save Changes </a> -->
                                        </div>
                                      </form>
                                    </div>
                                    <!-- END PERSONAL INFO TAB -->
                                    <!-- CHANGE AVATAR TAB -->
                                    <div class="tab-pane" id="tab_1_2">
                                      <form class="form-horizontal" role="form" method="post" action="<?php echo site_url()?>admin/users/changeavatar" enctype="multipart/form-data">
                                        <input type="hidden" name="user_id" value="<?=$detail[0]->id;?>">
                                        <div class="form-group">
                                          <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                              <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> 
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                            <div>
                                              <span class="btn default btn-file">
                                              <span class="fileinput-new"> Select image </span>
                                              <span class="fileinput-exists"> Change </span>
                                              <input type="file" name="avatar"> </span>
                                              <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="margin-top-10">
                                          <button type="submit" class="btn green"> Save Changes</button>
                                        </div>
                                      </form>
                                    </div>
                                    <!-- END CHANGE AVATAR TAB -->
                                    <!-- CHANGE PASSWORD TAB -->
                                    <div class="tab-pane" id="tab_1_3">
                                      <form class="form-horizontal" role="form" method="post" action="<?php echo site_url()?>admin/AuthAdmin/change_password" enctype="multipart/form-data">
                                        <input type="hidden" name="user_id" value="<?=$detail[0]->id;?>">
                                        <div class="form-group">
                                          <label class="control-label">Current Password</label>
                                          <input type="password" class="form-control" id="old" placeholder="Old Password" name="old">
                                        </div>
                                        <div class="form-group">
                                          <label class="control-label">New Password</label>
                                          <input type="password" class="form-control" id="new_password" placeholder="New Password" name="new">
                                        </div>
                                        <div class="form-group">
                                          <label class="control-label">Re-type New Password</label>
                                          <input type="password" class="form-control" id="new_confirm" placeholder="Confirm Password" name="new_confirm">
                                        </div>
                                        <div class="margin-top-10">
                                          <button type="submit" class="btn green"> Save Changes</button>
                                        </div>
                                      </form>
                                    </div>
                                    <!-- END CHANGE PASSWORD TAB -->
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
    <script src="<?php path_adm()?>/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/global/scripts/app.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/pages/scripts/profile.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <script src="<?php path_adm()?>/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
  </body>
</html>