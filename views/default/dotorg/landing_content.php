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

$features = elgg_view_menu('dotorg_features', array(
	'class' => 'elgg-menu-hz elgg-dotorg-slider',
	'sort_by' => 'register'
));

echo elgg_view_module('featured', 'Features', $features, array('class' => 'clearfloat'));

$users = elgg_view_menu('dotorg_users', array(
	'class' => 'elgg-menu-hz elgg-dotorg-slider',
	'sort_by' => 'register'
));

echo elgg_view_module('featured', "Who's using Elgg?", $users, array('class' => 'clearfloat'));