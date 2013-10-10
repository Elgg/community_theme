<?php 

$class = array('class' => 'elgg-module-community-plugins');

$title = elgg_echo('item:object:plugin');
$content = elgg_echo('community_theme:plugins');

$content .= elgg_view('output/url', array(
	'class' => 'homepage_more_link',
	'href' => '/plugins', 
	'text' => elgg_echo('community_theme:more:link'), 
));

echo elgg_view_module('community', $title, $content, $class);
