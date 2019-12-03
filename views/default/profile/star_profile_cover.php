<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$user = elgg_get_page_owner_entity();
?>

<div class="profile-header text-white">
                      <div class="d-flex justify-content-center justify-content-md-between mx-4 mx-xl-5 px-xl-5 flex-wrap">
                        <div class="profile-info d-flex align-items-center justify-content-center flex-wrap mr-sm-3">
                          <img class="rounded-circle img-lg mb-3 mb-sm-0" src="<?php echo $user->getIconURL('medium');?>" alt="profile image">
                          <div class="wrapper pl-sm-4">
                            <p class="profile-user-name text-center text-sm-left"><?php echo $user->name;?></p>
                            <div class="wrapper d-flex align-items-center justify-content-center flex-wrap">
                              <p class="profile-user-designation text-center text-md-left my-2 my-md-0"><?php echo $user->briefdescription;?></p>
                              <div class="br-wrapper br-theme-css-stars"><select id="example-css" name="rating" autocomplete="off" style="display: none;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select><div class="br-widget"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected br-current"></a><a href="#" data-rating-value="2" data-rating-text="2" class=""></a><a href="#" data-rating-value="3" data-rating-text="3" class=""></a><a href="#" data-rating-value="4" data-rating-text="4" class=""></a><a href="#" data-rating-value="5" data-rating-text="5" class=""></a></div></div>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>