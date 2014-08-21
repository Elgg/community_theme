<?php
/**
 * Elgg Community Theme
 *
 */

elgg_register_event_handler('init', 'system', 'community_theme_init');

function community_theme_init() {

	elgg_register_event_handler('pagesetup', 'system', 'community_theme_pagesetup', 1000);

	elgg_extend_view('css/elgg', 'community_theme/css');

	elgg_register_plugin_hook_handler('head', 'page', 'community_theme_setup_head');
	elgg_register_page_handler('', 'community_theme_front_page');

	elgg_unregister_menu_item('site', 'bookmarks');
	elgg_unregister_menu_item('site', 'members');
	elgg_unregister_menu_item('site', 'pages');

	//remove "Powered by Elgg" link
	elgg_unregister_menu_item('footer', 'powered');

	elgg_unregister_plugin_hook_handler('prepare', 'menu:site', '_elgg_site_menu_setup');
}

/**
 * Register items for the html head
 *
 * @param string $hook Hook name ('head')
 * @param string $type Hook type ('page')
 * @param array  $data Array of items for head
 * @return array
 */
function community_theme_setup_head($hook, $type, $data) {
	$data['metas'][] = array(
		'http-equiv' => 'X-UA-Compatible',
		'content' => 'IE=edge',
	);

	$data['metas'][] = array(
		'name' => 'viewport',
		'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0',
	);

	$data['links'][] = array(
		'rel' => 'icon',
		'href' => elgg_normalize_url('mod/community_theme/graphics/favicon.ico'),
	);

	return $data;
}

/**
 * Setup menu items
 */
function community_theme_pagesetup() {

	if (elgg_get_context() == 'community'){
		elgg_extend_view('page/elements/body', 'page/elements/featured', 1);
	}

	// Extend footer with report content link
	if (elgg_is_logged_in()) {
		elgg_unregister_menu_item('footer', 'report_this');

		$href = "javascript:elgg.forward('reportedcontent/add'";
		$href .= "+'?address='+encodeURIComponent(location.href)";
		$href .= "+'&title='+encodeURIComponent(document.title));";

		elgg_register_menu_item('extras', array(
			'name' => 'report_this',
			'href' => $href,
			'title' => elgg_echo('reportedcontent:this:tooltip'),
			'text' => elgg_view_icon('report-this'),
		));
	}

	// footer navigation
	$items = array(
		'home' => array(elgg_echo('community_theme:home'), 'elgg.org'),
		'community' => array(elgg_echo('community_theme:community'), 'community.elgg.org'),
		'blog' => array(elgg_echo('community_theme:blog'), 'blog.elgg.org'),
		'hosting' => array(elgg_echo('community_theme:hosting'), 'elgg.org/hosting.php'),
		'services' => array(elgg_echo('community_theme:services'), 'elgg.org/services.php'),
		'docs' => array(elgg_echo('community_theme:learn'), 'learn.elgg.org/'),
		'download' => array(elgg_echo('community_theme:download'), 'elgg.org/download.php'),
	);

	foreach ($items as $id => $info) {
		list($text, $href) = $info;
		$item = new ElggMenuItem($id, $text, $href);
		elgg_register_menu_item('footer_navigation', $item);
	}

	elgg_register_menu_item('footer', array(
		'name' => 'policy',
		'href' => "http://elgg.org/domain.php",
		'text' => elgg_echo('community_theme:policy'),
		'section' => 'default',
	));
}

/**
 * Elgg community site front page handler
 *
 * @param string $hook
 * @param string $type
 * @param bool $return
 * @param array $params
 * @return bool
 */
function community_theme_front_page() {
	if (!include_once(dirname(__FILE__) . "/index.php")) {
		return false;
	}

	return true;
}