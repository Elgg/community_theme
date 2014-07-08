<?php
/**
 * Module Plugins
 *
 */

$title = elgg_echo('community_theme:title:plugins');

// get number of plugins
$num_plugins = elgg_get_entities(array(
	'type' => 'object',
	'subtype' => 'plugin_project',
	'count' => true,
));
$num_plugins = floor($num_plugins / 100) * 100;

$content = elgg_echo('community_theme:plugins', array($num_plugins));

$content .= elgg_view('output/url', array(
	'class' => 'homepage-more-link',
	'href' => '/plugins/category/themes', 
	'text' => elgg_echo('community_theme:themes:link'), 
));

$content .= elgg_view('output/url', array(
	'class' => 'homepage-more-link',
	'href' => '/plugins', 
	'text' => elgg_echo('community_theme:plugins:link'),
));

echo elgg_view_module('community', $title, $content);
