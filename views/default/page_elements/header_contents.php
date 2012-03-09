<div id="globalheader_wrapper">
	<div id="globalheader">
	<ul>
		<li><a href="http://elgg.org/index.php" target="_top" class="header">Home</a></li>
		<li><a href="http://elgg.org/about.php" target="_top" class="header">About</a></li>
		<li><a href="http://blog.elgg.org/" class="header" target="_top">Blog</a></li>
		<li><a href="http://elgg.org/services.php" class="header" target="_top">Services</a></li>
		<li><a href="http://elgg.org/hosting.php" class="header" target="_top">Hosting</a></li>
		<li><a href="http://community.elgg.org" class="header selected" target="_top">Community</a></li>
		<li><a href="http://docs.elgg.org/" class="header" target="_top">Documentation</a></li>
		<li><a href="http://elgg.org/download.php" target="_top" class="header">Download</a></li>
	</ul>
	</div>
</div>

<div id="page_container">
<div id="page_wrapper">

<div id="layout_header">
<div id="wrapper_header">
	<div id="promotion">
		<?php
			$now = new DateTime();
			$event = new DateTime('2012-03-24');
			$interval = $now->diff($event);
			$day_count = $interval->format('%a');
			$discount = rand(0, 1);
			$days = ($day_count == 1) ? 'day' : 'days';
			
			$url = 'http://elggcampsf.eventbrite.com';
			$text = 'Register now for ECSF!';
			if ($discount) {
				$url .= '?discount=ElggCommunity';
				$text = 'Receive a discount when you register for ECSF!';
			}

			$link = elgg_view('output/url', array(
				'href' => $url,
				'text' => $text
			));

			echo "<h2>$link</h2>";
			echo "Only $day_count $days left to register for <a href=\"http://elggcampsf.org\">ElggCamp San Francisco!</a>";
		?>
	</div>
	
	<div id="logo"><a href="<?php echo $vars['url']; ?>"><img src="<?php echo $vars['url']; ?>_graphics/spacer.gif" border="0" width="125" height="68" alt="spacer graphic" /></a></div>
<?php

$home_selected = $plugin_selected = $disc_selected = $groups_selected = '';
$url = $_SERVER["REQUEST_URI"];

if (get_context() == 'plugins' || get_context() == 'plugin_project') {
	$plugin_selected = 'class="selected"';
}

if (get_context() == 'groups') {
	if (strpos($url, '/groups/forum') || strpos($url, '/groups/discussion')) {
		$disc_selected = 'class="selected"';
	} else {
		$groups_selected = 'class="selected"';
	}
}

if ($url == '/') {
	$home_selected = 'class="selected"';
}

//a view for plugins to extend
echo elgg_view('extend/headercontents');
?>
<div id="submenu">
	<a href="<?php echo $vars['url']; ?>" <?php echo $home_selected; ?>>Home</a>
	<a href="<?php echo $vars['url']; ?>pg/plugins/all/" <?php echo $plugin_selected; ?>>Plugins</a>
	<a href="<?php echo $vars['url']; ?>pg/groups/world/" <?php echo $groups_selected; ?>>Groups</a>
	<a href="<?php echo $vars['url']; ?>pg/groups/discussion/" <?php echo $disc_selected; ?>>Discussion</a>
<div class="clearfloat"></div></div>

</div><!-- /#wrapper_header -->
</div><!-- /#layout_header -->
