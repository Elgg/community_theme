<?php
/**
 * Site navigation menu
 *
 * @uses $vars['menu']['default']
 * @uses $vars['menu']['more']
 */

$default_items = elgg_extract('default', $vars['menu'], array());
$more_items = elgg_extract('more', $vars['menu'], array());
$main_menu = $vars['main_menu'];
//echo '<ul class="elgg-menu elgg-menu-site elgg-menu-site-default clearfix">';
if($main_menu == 1)
{
foreach ($default_items as $menu_item) {
    
     
 if ($menu_item->getSelected() == 1)
     $item_class = "nav-item active";  
 else 
     $item_class = "nav-item";
 
 
	//echo elgg_view('navigation/menu/elements/item', array('item' => $menu_item));
    ?>
<li class="<?php echo $item_class;?>">
              <a class="nav-link" href="<?php echo $menu_item->getHref();?>" aria-expanded="false">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title"><?php echo $menu_item->getText();  ?></span>
              </a>
            </li>
<?php
}
}
if($main_menu == 2)
{
    
foreach ($more_items as $menu_item) {
	//echo elgg_view('navigation/menu/elements/item', array('item' => $menu_item));
     if ($menu_item->getSelected() != null)
     $item_class = "nav-item active";  
 else 
     $item_class = "nav-item";
 
    ?>
            
             <li class="<?php echo $item_class;?>">
                    <a class="nav-link" href="<?php echo $menu_item->getHref();?>"><?php echo $menu_item->getText();  ?></a>
                  </li>

<?php
}
}
