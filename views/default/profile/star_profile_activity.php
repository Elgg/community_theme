<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $user = elgg_get_page_owner_entity();

    $db_prefix = elgg_get_config('dbprefix');
    $activity = elgg_get_river([
    'limit' => 10,
    'pagination' => false,
    'joins' => ["JOIN {$db_prefix}entities e1 ON e1.guid = rv.object_guid"],
    'wheres' => ["(e1.container_guid = $user->guid)"],
    ]);
      ?>

<div class="row">
                                <div class="col-12 mt-5">
                                  <h5 class="mb-5">User Activity</h5>
                                  <div class="stage-wrapper pl-4">
                                      
<?php
        
        //echo print_r($activity);
foreach ($activity as $value) {
//echo $value->object_guid;
//echo $value->action_type;
//echo $value->subject_guid;
//echo $value->subtype;   
//echo $value->target_guid;
            
$time_posted = $value->posted;
//echo $value->view;
//echo elgg_echo($user->guid .'river:'. $value->action_type.':object:'.$value->subtype .'');
//echo elgg_echo('river:create:object:plugin_release');
$river_object = get_entity($value->object_guid);

 $river_object_name = $river_object->title ? $river_object->title : $river_object->name;
//echo print_r($test);
//echo $test->title;
//echo '</br>';
$action = $value->action_type;
$type = $value->type;
//$subtype = $value->subtype;
$subtype = $value->subtype ? $value->subtype : 'default';
$key = "river:$action:$type:$subtype";
//echo $user->name; 
$summary = elgg_echo($key, array($subject_link, $object_link));
//echo $river_object->title;
//if ($summary == $key) {
	//$key = "river:$action:$type:default";
	//$summary = elgg_echo($key, array($subject_link, $object_link));
//}
?>
                                    
                                   
                                    <div class="stages border-left pl-5 pb-4">
                                      <div class="btn btn-icons btn-rounded stage-badge btn-inverse-success">
                                        <i class="mdi mdi-format-list-checks"></i>
                                      </div>
                                      <div class="d-flex align-items-center mb-2 justify-content-between flex-wrap">
                                        <h5 class="mb-0 mr-2"><?php echo $user->name . ' ' . $summary; ?></h5>
                                        <small class="text-muted"><?php echo date('m/d/Y',$time_posted); ?></small>
                                      </div>
                                      <p>
                                          <a href="<?php echo $river_object->getURL();?>">
                                          <?php echo $river_object_name; ?>
                                          </a>
                                      </p>
                                    </div>
                                      
                                       <?php

}
                                    
                                    ?>

                                      </div>
                                </div>
                              </div>