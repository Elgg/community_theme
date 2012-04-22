<?php
/**
 * Elgg page header
 * In the default theme, the header lives between the topbar and main content area.
 */


// link back to main site.
//echo elgg_view('page/elements/header_logo', $vars);
$link = elgg_view('output/url', array(
	'href' => 'http://elgg.org/',
	'text' => '<img src="' . $vars['url'] . '/mod/community_theme/graphics/logo.png" width="144" height="76" />',
	'is_trusted' => true,
));

echo "<h1>$link</h1>";

// drop-down login
echo elgg_view('core/account/login_dropdown');

// banner
echo elgg_view('dotorg/landing_banner', $vars);