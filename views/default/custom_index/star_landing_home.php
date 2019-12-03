<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$site_url = elgg_get_site_url();
$site = elgg_get_site_entity();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
echo elgg_view('custom_index/elements/star_landing_head');
?>
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
<?php 
    echo elgg_view('custom_index/elements/star_landing_nav');
?>
  </header>
  <div class="banner" >
    <div class="container">
      <h1 class="font-weight-semibold">Introducing a powerful open source<br>social networking engine</h1>
      <h6 class="font-weight-normal text-muted pb-3">Providing you with the core components needed to build a socially aware web application</h6>
      <div>
        <button class="btn btn-opacity-light mr-1">Get elgg</button>
        <button class="btn btn-opacity-success ml-1">Learn more</button>
      </div>
      
      <img src="<?php echo $site_url?>mod/star-admin-theme/graphics/logo_full.png" alt="" class="img-fluid" style="width: 500px; padding-top: 40px; padding-bottom: 40px;">
      
    </div>
  </div>
  <div class="content-wrapper">
    <div class="container">
        <?php
        echo elgg_view('custom_index/sections/landing_features');
        ?>
       <br>
        <?php
        echo elgg_view('custom_index/sections/landing_description');
        ?>
       <br>
        <?php
        echo elgg_view('custom_index/sections/landing_getting_started');
        ?>
        <br>
        <?php
        echo elgg_view('custom_index/sections/landing_resources');
        ?>
         
      
      <section class="contact-us" id="contact-section">
        <div class="contact-us-bgimage grid-margin" >
          <div class="pb-4">
            <h4 class="px-3 px-md-0 m-0" data-aos="fade-down">Ready to use elgg?</h4>
            <h4 class="pt-1" data-aos="fade-down"></h4>
          </div>
          <div data-aos="fade-up">
            <button class="btn btn-rounded btn-outline-danger">Get it now</button>
          </div>          
        </div>
      </section>
        
        <?php
        echo elgg_view('custom_index/sections/landing_contact');
        ?>
      
     
       
    </div> 
  </div>
    
    <?php
    echo elgg_view('custom_index/elements/star_landing_foot');
    ?>
    
</body>
</html>