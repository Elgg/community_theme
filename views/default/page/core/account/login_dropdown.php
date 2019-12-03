<?php
/**
 * Elgg drop-down login form
 */

if (elgg_is_logged_in()) {
	return true;
}

$body = elgg_view_form('login', array(), array('returntoreferer' => TRUE));
$site_url = elgg_get_site_url();
$__elgg_ts = time();
$__elgg_token = generate_action_token($__elgg_ts);

?>
<div id="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" >
<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-0 mr-md-3">
                  <i class="flag-icon fa fa-sign-in"></i> 
                </div>
                <span class="profile-text font-weight-medium d-none d-md-block">
                   Log in
                </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown" style="width: 250px;">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 font-weight-medium float-left">Login form</p>
                  
                </a>
                
                  <form method="post" action="<?php echo $site_url;?>action/login" class="elgg-form elgg-form-star-login">
          <fieldset>
              <input name="__elgg_token" value="<?php echo $__elgg_token?>" type="hidden">
              <input name="__elgg_ts" value="<?php echo $__elgg_ts?>" type="hidden">
                  
                    
                    <?php
                    echo elgg_view('page/forms/star_login', array(), array('returntoreferer' => TRUE));
                    ?>
                  
                  </fieldset></form>
                 
              </div>
            </li>

    
	
</div>
