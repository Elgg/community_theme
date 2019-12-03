<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$user = elgg_get_page_owner_entity();
?>

<div class="table-responsive">
                                <table class="table table-borderless w-100 mt-4">
                                  <tbody><tr>
                                    <td>
                                      <strong>Username:</strong> <?php echo $user->username;?></td>
                                    <td>
                                      <strong>Website:</strong> <?php echo $user->website;?></td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>Location:</strong> <?php echo $user->location;?></td>
                                    <td>
                                      <strong>Email:</strong> <?php echo $user->email;?></td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>Skills:</strong> <?php 
foreach ($user->skills as $v) {
    echo '<i class="fa fa-check-circle-o"></i>' . $v . '  '; 
}
                                      
                                      
                                      ?></td>
                                    <td>
                                      </td>
                                  </tr>
                                </tbody></table>
                              </div>