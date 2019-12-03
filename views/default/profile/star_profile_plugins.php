<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$site_url = elgg_get_site_url();
$plugin_categories = elgg_get_config('plugincats');
?>
<center>
    <h5 class="my-4">
        Plugins and Themes
    </h5>
</center>

<div class="new-accounts">
    <ul class="chats ps">
                                
<?php

    $plugin_container;
    $plugin_image_guid;
    $options = array
            (
                'owner_guids' => $user->guid,
                'types' => array('object'),
                'subtypes' => array('plugin_project'),
                'limit' => 1,
                'offset' => 0,
                'order_by' => 'e.last_action DESC',
                'pagination' => false, 
            );
    
    

    $_options = elgg_get_entities($options);
                                
                                //echo print_r($_options);
    foreach ($_options as $t) 
        {
    //      echo $t->title;
        $plugin_object = get_entity($t->guid);
        //echo $t->guid;
        $img_files = $plugin_object->getScreenshots();

            foreach ($img_files as $img) 
                {
                if($img->project_image == 1 )
                    {
                    $plugin_container = $img->container_guid;
                    $plugin_image_guid = $img->guid; 
                    }
            }

       // $img_files = [];


        ?>
<li class="chat-persons">

  <span class="pro-pic">
      <center>
          <a href="<?php echo $site_url;?>plugins/<?php echo $t->guid; ?>">
            <img src="<?php echo $site_url?>plugins/<?php echo $plugin_container?>/icons/<?php echo $plugin_image_guid?>.jpg" alt="profile image" width="128">
          </a>
       </center>
  </span>
 
<br>

<div class="user">
    <p class="u-name">
        <a href="<?php echo $site_url;?>plugins/<?php echo $t->guid; ?>">
            <?php echo $t->title;?>
        </a>
    </p>
    
    <p class="u-designation">
        <?php echo $t->summary;?>
    </p>
    
    <p class="u-designation">
        <b>
            <?php echo elgg_echo('plugins:category');?>: 
        </b>
        
        <a href="<?php echo $site_url;?>plugins/category/<?php echo $t->plugincat; ?>">
            <?php echo $plugin_categories[$t->plugincat];?>
        </a>
    </p>
</div>

</li>
<?php
}
?>
                              
                              
                            
</div>