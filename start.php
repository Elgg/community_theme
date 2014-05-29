<?php
/**
 * Elgg Community Theme
 * 
 */
     
elgg_register_event_handler('init', 'system', 'community_theme_init');

function community_theme_init() {
	elgg_extend_view('css/elgg', 'community_theme/css');
	
	elgg_register_page_handler('', 'community_theme_front_page');
	
	elgg_unregister_menu_item('site', 'bookmarks');
	elgg_unregister_menu_item('site', 'members');
	elgg_unregister_menu_item('site', 'pages');

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
		'home' => array('Home', 'elgg.org'),
		'community' => array('Community', 'community.elgg.org'),
		'blog' => array('Blog', 'blog.elgg.org'),
		'hosting' => array('Hosting', 'elgg.org/hosting.php'),
		'services' => array('Services', 'elgg.org/services.php'),
		'docs' => array('Docs', 'docs.elgg.org'),
	);

	//remove "Powered by Elgg" link
	elgg_unregister_menu_item('footer', 'powered');

	foreach ($items as $id => $info) {
		list($text, $href) = $info;
		$item = new ElggMenuItem($id, $text, $href);
		elgg_register_menu_item('footer_navigation', $item);
	}
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