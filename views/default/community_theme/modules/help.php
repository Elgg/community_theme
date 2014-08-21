<?php
/**
 * Module Help
 *
 */

$title = elgg_echo('community_theme:title:help');

$num_members = get_number_users(); // get number of members

$content = elgg_echo('community_theme:help', array($num_members));

$content .= elgg_view('output/url', array(
	'class' => 'elgg-button',
	'href' => '/discussion/all',
	'text' => elgg_echo('community_theme:help:link'),
));

echo elgg_view_module('community', $title, $content);
