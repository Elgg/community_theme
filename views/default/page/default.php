<?php
/**
 * Elgg pageshell
 * The standard HTML page shell that everything else fits into
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['head']        Parameters for the <head> element
 * @uses $vars['body_attrs']  Attributes of the <body> tag
 * @uses $vars['body']        The main content of the page
 * @uses $vars['sysmessages'] A 2d array of various message registers, passed from system_messages()
 */

// render content before head so that JavaScript and CSS can be loaded. See #4032

$messages = elgg_view('page/elements/messages', array('object' => $vars['sysmessages']));

$header = elgg_view('page/elements/header', $vars);
$navbar = elgg_view('page/elements/navbar', $vars);
$content = elgg_view('page/elements/body', $vars);
$footer = elgg_view('page/elements/footer', $vars);

$site_url = elgg_get_site_url();
$site = elgg_get_site_entity();
$site_name = $site->name;
 
$user = elgg_get_logged_in_user_entity();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $site_name;?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo $site_url?>mod/star-admin-theme/vendors/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo $site_url?>mod/star-admin-theme/vendors/assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="<?php echo $site_url?>mod/star-admin-theme/vendors/assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="<?php echo $site_url?>mod/star-admin-theme/vendors/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo $site_url?>mod/star-admin-theme/vendors/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo $site_url?>mod/star-admin-theme/vendors/assets/vendors/css/vendor.bundle.addons.css">
    
    <link rel="stylesheet" href="<?php echo $site_url?>mod/star-admin-theme/vendors/assets/css/shared/style.css">
    
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo $site_url?>mod/star-admin-theme/vendors/assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="<?php echo $site_url?>mod/star-admin-theme/vendors/assets/images/favicon.png" />
    <?php echo elgg_view('page/elements/head', $vars['head']);?>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php echo elgg_view('page/elements/star_navbar');?>
      <!-- partial -->
      
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       <?php echo elgg_view('page/elements/star_sidebar');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="p-4 border-bottom bg-light">
                    <h4 class="card-title mb-0">Mixed Chart</h4>
                  </div>
                  <div class="card-body">
                    
                    <p class="mb-0 font-weight-light"><?php echo $content ?></p>
                  </div>
                </div>
              </div> 
            </div>
            <!-- Page Title Header Ends-->
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
              </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo $site_url?>mod/star-admin-theme/vendors/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?php echo $site_url?>mod/star-admin-theme/vendors/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    
   <script src="<?php echo $site_url?>mod/star-admin-theme/vendors/assets/js/shared/off-canvas.js"></script>
    
    <!-- Custom js for this page-->
    <script src="<?php echo $site_url?>mod/star-admin-theme/vendors/assets/js/demo_1/dashboard.js"></script>
    <?php echo elgg_view('page/elements/foot');?>
    <!-- End custom js for this page-->
  </body>
</html>