<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$site_url = elgg_get_site_url();
$site = elgg_get_site_entity();
$site_name = $site->name;
 
$user = elgg_get_logged_in_user_entity();
?>

<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="<?php echo $site_url?>">
              <p>
            <img src="https://elgg.org/cache/1579351391/default/logo.svg" alt="logo"  height="50"/> </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
           <i class="mdi mdi-shield-outline"></i>  </a>
        </p>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
     <?php 
              if (elgg_is_logged_in())
                    {
             ?>       
            <li class="nav-item dropdown language-dropdown">
              <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-0 mr-md-3">
                  <i class="flag-icon fa fa-cogs"></i> 
                </div>
                <span class="profile-text font-weight-medium d-none d-md-block">
                    Settings
                </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 font-weight-medium float-left">Options </p>
                  
                </a>
                <a class="dropdown-item preview-item py-3" href="<?php echo $site_url ?>settings/user/<?php echo $user->username;?>/">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-settings m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Account settings</h6>
                    
                    
                  </div>
                </a>
                  <a class="dropdown-item preview-item py-3" href="<?php echo $site_url ?>settings/statistics/<?php echo $user->username;?>/">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-chart-line m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Account statistics</h6>
                    
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-domain m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">TBA</h6>
                    
                  </div>
                </a>
              </div>
            </li>
         <?php
                    }
         ?>
          
          </ul>
          <form class="ml-auto search-form d-none d-md-block" action="<?php echo $site_url?>search" method="get">
            <div class="form-group">
              <input type="search" name="q" class="form-control" placeholder="Search Here">
              <input type="hidden" name="search_type" value="all">
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
              <?php 
              if (elgg_is_logged_in())
                    {
             ?>
             
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="<?php echo $site_url?>messages/inbox/<?php echo $user->guid;?>">
                <i class="mdi mdi-email-outline"></i>
                <span class="count bg-success"><?php echo $num_messages = (int)messages_count_unread();?></span>
              </a>
               
            </li>
            <li class="nav-item dropdown  d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="<?php echo $user->getIconURL('medium');?>" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="<?php echo $user->getIconURL('medium');?>" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold"><?php echo $user->username;?></p>
                  <p class="font-weight-light text-muted mb-0"><?php echo $user->email;?></p>
                </div>
                <a class="dropdown-item" href="<?php echo $site_url ?>profile/<?php echo $user->username;?>">
                    <i class="dropdown-item-icon fa fa-user-circle"></i> My Profile  
                    
                </a>
                  
                <a class="dropdown-item" href="<?php echo $site_url ?>profile/<?php echo $user->username;?>/edit/">
                   <i class="dropdown-item-icon fa fa-edit"></i>  Edit profile
                    
                </a>
                  
                <a class="dropdown-item" href="<?php echo $site_url ?>avatar/edit/<?php echo $user->username;?>/">
                <i class="dropdown-item-icon fa fa-camera-retro"></i> Edit avatar
                </a>
                  <?php
                  if (elgg_is_admin_logged_in())
{   
    ?>
                  <a class="dropdown-item" href="<?php echo $site_url ?>admin/">
                   <i class="dropdown-item-icon fa fa-dashboard"></i> Administration
                </a>
                
                 <?php
}
?>
                  <a class="dropdown-item" href="<?php echo $site_url ?>action/logout/">
                    <i class="dropdown-item-icon fa fa-sign-out"></i>Sign Out
                    
                </a>
              </div>
            </li>
            <?php
            
                    }
            ?>
            <?php
                echo elgg_view('page/core/account/login_dropdown');
             ?>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>