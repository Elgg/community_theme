<?php
/**
 * Main content for elgg.org landing page
 */

$left_modules = array (
	'Hosting' => 'Looking for a provider to host your network built on the open source
                  engine? Find companies who specialize in Elgg hosting.',
	'Events' => 'No events scheduled'
);

$right_modules = array(
	'Elgg Book' => 'Get the book here.',
	'Giving Back' => 'There are several ways you can help out the Elgg project. The options range from <a href="http://trac.elgg.org">bug reporting</a> and <a href="http://trac.elgg.org">patch submission</a> to joining the <a href="http://elgg.org/supporter.php">supporters scheme</a> or buying a <a href="http://elgg.org/services.php">services listing</a>.',
);

?>

<div class="elgg-col elgg-col-1of2">
<?php
	foreach ($left_modules as $title => $body) {
		echo elgg_view_module('featured', $title, $body);
	}
?>
</div>

<div class="elgg-col elgg-col-1of2">
<?php
	foreach ($right_modules as $title => $body) {
		echo elgg_view_module('featured', $title, $body);
	}
?>
</div>

<?php

$items = array(
	'activity' => 'Activity',
	'blogs' => 'Blogs',
	'bookmarks' => 'Bookmarks',
	'groups' => 'Groups',
	'the_wire' => 'The Wire',
	'messages' => 'Messages',
);

foreach ($items as $id => $text) {
//	$href = elgg_normalize_url("features/$id");
	$href = false;
	$img = elgg_normalize_url("mod/community_theme/graphics/$id.png");
	$text = "<img src=\"$img\" /><br />$text";
	$item = new ElggMenuItem($id, $text, $href);
	$item->setContext('dotorg');
	elgg_register_menu_item('dotorg_features', $item);
}

$features = elgg_view_menu('dotorg_features', array(
	'class' => 'elgg-menu-hz elgg-dotorg-slider',
	'sort_by' => 'register'
));

echo elgg_view_module('featured', 'Features', $features, array('class' => 'clearfloat'));



$items = array(
	'wiley' => array('Wiley Publishing', 'wiley.com'),
	'oxfam' => array('oxFam', 'oxfam.com'),
	'uf' => array('University of Florida', 'uf.edu'),
	'australia' => array('Australian Government', 'au.gov.au'),
);

foreach ($items as $id => $info) {
	list($text, $href) = $info;
	$img = elgg_normalize_url("mod/community_theme/graphics/$id.jpg");
	$text = "<img alt=\"$text\" src=\"$img\" />";
	
	$item = new ElggMenuItem($id, $text, $href);
	$item->setContext('dotorg');
	elgg_register_menu_item('dotorg_users', $item);
}

$users = elgg_view_menu('dotorg_users', array(
	'class' => 'elgg-menu-hz elgg-dotorg-slider',
	'sort_by' => 'register'
));

echo elgg_view_module('featured', "Who's using Elgg?", $users, array('class' => 'clearfloat'));