<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
      <div class="navbar-brand-wrapper d-flex w-100">
          <img src="<?php echo $site_url?>mod/star-admin-theme/graphics/logo.svg" style="width: 50px;" alt="">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button> 
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
            <div class="navbar-collapse-logo">
              <img src="<?php echo $site_url?>mod/star-admin-theme/vendors/landing_assets/images/Group2.svg" alt="">
            </div>
            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
            </button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#header-section">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features-section">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#digital-marketing-section">Features</a>  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#case-studies-section">Guide</a>  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#feedback-section">Resources</a>
          </li>
         
          <li class="nav-item btn-contact-us pl-4 pl-lg-0">
              <a href="<?php echo $site_url?>activity" style="color:#f2f2f2;"><button class="btn btn-info">Community</button></a>
          </li>
        </ul>
      </div>
    </div> 
    </nav>   

