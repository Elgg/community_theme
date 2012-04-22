<?php
/**
 * Sidebar for the elgg.org landing page
 */

$news_items = array(
	'url' => array('Test news item', 'This is a blog post from blog.elgg.org'),
	'url2' => array('Test news item 2', 'This is a blog post from blog.elgg.org'),
);

foreach ($news_items as $id => $info) {
	list($title, $body) = $info;
	
	$item = new ElggMenuItem($id, $title, $url);
	$item->setSection('news');
	elgg_register_menu_item('page', $item);
}

$links = array(
	'url' => 'Some random link. Maybe a recent forum topic?',
	'url2' => 'Random link 2', 'More random links',
);

foreach ($links as $url => $text) {
	$item = new ElggMenuItem($url, $text, $url);
	$item->setSection('links');
	elgg_register_menu_item('page', $item);
}

echo elgg_view_menu('page', array(
	'sort_by' => 'register',
	'show_section_headers' => true,
));