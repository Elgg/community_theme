<?php

$class = array('class' => 'elgg-module-community-discussion');

$title = elgg_echo('community_theme:title:discussion');
$content = elgg_echo('community_theme:discussion');

$content .= elgg_view('output/url', array(
	'class' => 'homepage_more_link',
	'href' => '/groups/all', 
	'text' => elgg_echo('community_theme:more:link'), 
));

echo elgg_view_module('community', $title, $content, $class);