<div class="page-wrapper-row">
  <div class="page-wrapper-top">
    <div class="page-header">
      <div class="page-header-top">
        <div class="container">
          <div class="page-logo">
            <a href="<?=base_url();?>admin">
            <img src="<?php path_adm()?>/layouts/layout3/img/logo-default.jpg" alt="logo" class="logo-default">
            </a>
          </div>
          <a href="javascript:;" class="menu-toggler"></a>
          <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
              <li class="dropdown dropdown-user dropdown-dark">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <?php if ($user_detail[0]->avatar == NULL || !file_exists('./content/media/users/'.$user_detail[0]->avatar) == TRUE) {?>
                <img class="img-circle" src="http://www.placehold.it/150x150/EFEFEF/AAAAAA&amp;text=no+image">
                <?php }else{ ?>
                <img class="img-circle" src="<?=base_url();?>content/media/users/<?=$user_detail[0]->avatar;?>">
                <?php }?>
                <span class="username username-hide-mobile"><?=$user_detail[0]->first_name;?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-default">
                  <li>
                    <a href="page_user_profile_1.html">
                    <i class="icon-user"></i> My Profile </a>
                  </li>
                  <li>
                    <a href="<?=base_url();?>admin/logout>
                      <i class="icon-key"></i> Log Out </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="page-header-menu">
        <div class="container">
          <div class="hor-menu  ">
            <ul class="nav navbar-nav">
              <li aria-haspopup="true" class="<?php if($module == 'Dashboard'){echo "active";}?>"> <a href="<?=base_url();?>admin"> <i class="icon-home"></i> Dashboard</a> </li>
              <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown <?php if($module == 'User'){echo "active";}?>">
                <a href="javascript:;"> <i class="icon-users"></i> Users
                <span class="arrow"></span>
                </a>
                <ul class="dropdown-menu pull-left">
                  <li aria-haspopup="true" class=" ">
                    <a href="<?=base_url();?>admin/users" class="nav-link  "> User List </a>
                  </li>
                  <li aria-haspopup="true" class=" ">
                    <a href="<?=base_url();?>admin/users/add" class="nav-link  "> Add New </a>
                  </li>
                </ul>
              </li>
              <!-- <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                <a href="javascript:;"> <i class="icon-settings"></i> Setting
                <span class="arrow"></span>
                </a>
                <ul class="dropdown-menu pull-left">
                  <li aria-haspopup="true" class=" ">
                    <a href="#" class="nav-link  "> General </a>
                  </li>
                  <li aria-haspopup="true" class=" ">
                    <a href="#" class="nav-link  "> IP Filter </a>
                  </li>
                </ul>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>