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
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="navi">
              <?php 
              if (elgg_is_logged_in())
                    {
             ?>
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="<?php echo $user->getIconURL('small');?>" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $user->name?></p>
                  <p class="designation"><?php echo $user->email?></p>
                </div>
              </a>
            </li>
            <?php 
                    }
             ?>
            <li class="nav-item nav-category">Main Menu</li>
             
            
            <?php echo elgg_view_menu('site', array('main_menu'=> 1)); ?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">More</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <?php echo elgg_view_menu('site', array('main_menu'=> 2)); ?>
                   
                </ul>
              </div>
            </li>
           
          </ul>
        </nav>