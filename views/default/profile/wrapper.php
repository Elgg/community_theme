<?php
/**
 * Profile info box
 */
$user = elgg_get_page_owner_entity();
$site_url = elgg_get_site_url();
?>

<link rel="stylesheet" href="<?php echo $site_url?>mod/star-admin-theme/vendors/assets/css/profile-style.css">

<div class="row profile-page">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <?php echo elgg_view('profile/star_profile_cover'); ?>
                    <div class="profile-body">
                      <ul class="nav tab-switch" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="user-profile-info-tab" data-toggle="pill" href="#user-profile-info" role="tab" aria-controls="user-profile-info" aria-selected="true">Profile</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="user-profile-activity-tab" data-toggle="pill" href="#user-profile-activity" role="tab" aria-controls="user-profile-activity" aria-selected="false">Activity</a>
                        </li>
                      </ul>
                      <div class="row">
                        <div class="col-md-9">
                          <div class="tab-content tab-body" id="profile-log-switch">
                            <div class="tab-pane fade show active pr-3" id="user-profile-info" role="tabpanel" aria-labelledby="user-profile-info-tab">
                              <?php echo elgg_view('profile/star_profile_details'); ?>
                                </br>
                                <div class="col-12">
                                <strong>About me:</strong> </br><?php echo $user->description; ?>
                                </div>
                                </br>
                              <div class="row mt-5 pb-4 border-bottom">
                                <div class="col-md-6">
                                    <?php
                                    //echo $user->guid;
                                    $content = elgg_get_entities_from_relationship([
                                                'type' => 'group',
                                                'relationship' => 'member',
                                                'relationship_guid' => $user->guid,
                                                'limit' => 3,
                                                'pagination' => false,
                                                ]);
                                   // echo print_r($content);
                                    //echo "</br>";
                                    //echo "</br>";
                                    foreach ($content as $k) {
                                        
                                        //echo $k->id;
                                        ?>
                                    <div class="d-flex align-items-start pb-3 border-bottom">
                                        <a href="<?php echo $k->getURL(); ?>">
                                            <img src="<?php echo $k->getIconUrl('medium');?>" alt="brand logo">
                                        </a>
                                    <div class="wrapper pl-4">
                                        <a href="<?php echo $k->getURL(); ?>">
                                            <p class="font-weight-bold mb-0">
                                                <?php echo $k->name; ?>
                                            </p>
                                        </a>
                                      <small><?php echo $k->briefdescription; ?></small>
                                      </br>
                                      <small>
                                          <b>Owner</b>: 
                                          <?php 
                                                $owner = get_user($k->owner_guid);
                                                echo $owner->name;
                                          ?>
                                      </small>
                                    </div>
                                  </div>
                                    </br>
                                    <?php
                                        
                                        
                                        
                                    }
                                   ?>
                                  
                                </div>
                                 
                              </div>
                              
                            </div>
                            <div class="tab-pane fade" id="user-profile-activity" role="tabpanel" aria-labelledby="user-profile-activity-tab">
                              
                                      <?php echo elgg_view('profile/star_profile_activity'); ?>
                                 
                                   
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          
                          <?php echo elgg_view('profile/star_profile_plugins');?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<div class="profile elgg-col-2of3 mrn">
	<div class="elgg-inner clearfix h-card vcard">
		<?php //echo elgg_view('profile/owner_block'); ?>
		<?php// echo elgg_view('profile/details'); ?>
	</div>
</div>