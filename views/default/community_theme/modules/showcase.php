<?php
/**
 * Module Showcase
 *
 */

$title = elgg_echo('community_theme:title:showcase');
 
// get number of featured sites
$options = array(
    'type' => 'object',
    'subtype' => 'showcase',
    'metadata_name_value_pairs' => array('name' => 'featured', 'value' => 1),
    'count' => true
);
$num_featured = elgg_get_entities_from_metadata($options);

$content = elgg_echo('community_theme:showcase', array($num_featured));

$content .= elgg_view('output/url', array(
	'class' => 'homepage-more-link',
	'href' => '/showcase', 
	'text' => elgg_echo('community_theme:showcase:link'), 
));

echo elgg_view_module('community', $title, $content);
