<?php
/**
 * Elgg Community Theme
 * 
 */
     
elgg_register_event_handler('init', 'system', 'community_theme_init');

function community_theme_init() {
	elgg_extend_view('css/elgg', 'community_theme/css');
	elgg_register_js('jquery.coda_slider', elgg_get_site_url() . 'mod/community_theme/vendor/jquery.coda_slider/javascripts/jquery.coda-slider-2.0.js');

	elgg_register_simplecache_view('css/coda_slider');
	$url = elgg_get_simplecache_url('css', 'coda_slider');
	elgg_register_css('jquery.coda_slider', $url);

	elgg_register_simplecache_view('js/dotorg');
	$url = elgg_get_simplecache_url('js', 'dotorg');
	elgg_register_js('elgg.dotorg', $url);

	elgg_register_plugin_hook_handler('index', 'system', 'community_theme_front_page');
	
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
	
	// menus
	// @todo pull out into separate function that only loads based on domain
	// dotorg site menu
	$items = array(
		'home' => array('Home', 'elgg.org'),
		'foundation' => array('Foundation', 'foundation.elgg.org'),
		'community' => array('Community', 'community.elgg.org'),
		'blog' => array('Blog', 'blog.elgg.org'),
		'hosting' => array('Hosting', 'elgg.org/hosting.php'),
		'services' => array('Services', 'elgg.org/services.php'),
		'docs' => array('Docs', 'docs.elgg.org'),
	);

	foreach ($items as $id => $info) {
		list($text, $href) = $info;
		$item = new ElggMenuItem($id, $text, $href);
		$item->setContext('dotorg');
		elgg_register_menu_item('dotorg_site', $item);
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

	foreach ($items as $id => $info) {
		list($text, $href) = $info;
		$item = new ElggMenuItem($id, $text, $href);
		elgg_register_menu_item('footer_navigation', $item);
	}

	// downloads
	$href = elgg_view('output/url', array(
		'text' => '<h2>Download</h2>Elgg 1.7',
		'href' => 'elgg.org/download.php',
		'class' => 'elgg-button elgg-button-featured',
		'is_trusted' => true
	));
	$item = new ElggMenuItem('1.7', $href, false);
	elgg_register_menu_item('dotorg_downloads', $item);

	$href = elgg_view('output/url', array(
		'text' => '<h2>Download</h2>Elgg 1.8',
		'href' => 'elgg.org/download.php',
		'class' => 'elgg-button elgg-button-featured',
		'is_trusted' => true
	));
	$item = new ElggMenuItem('1.8', $href, false);
	elgg_register_menu_item('dotorg_downloads', $item);

	// dotorg features
	$items = array(
		'activity' => 'Activity',
		'blogs' => 'Blogs',
		'bookmarks' => 'Bookmarks',
		'groups' => 'Groups',
		'the_wire' => 'The Wire',
		'messages' => 'Messages',
	);

	foreach ($items as $id => $text) {
//	$href = elgg_normalize_url("features/$id");
		$href = false;
		$img = elgg_normalize_url("mod/community_theme/graphics/$id.png");
		$text = "<img src=\"$img\" /><br />$text";
		$item = new ElggMenuItem($id, $text, $href);
		$item->setContext('dotorg');
		elgg_register_menu_item('dotorg_features', $item);
	}


	// dotorg elgg users
	$items = array(
		'wiley' => array('Wiley Publishing', 'wiley.com'),
		'oxfam' => array('oxFam', 'oxfam.com'),
		'uf' => array('University of Florida', 'uf.edu'),
		'australia' => array('Australian Government', 'au.gov.au'),
	);

	foreach ($items as $id => $info) {
		list($text, $href) = $info;
		$img = elgg_normalize_url("mod/community_theme/graphics/$id.jpg");
		$text = "<img alt=\"$text\" src=\"$img\" />";

		$item = new ElggMenuItem($id, $text, $href);
		$item->setContext('dotorg');
		elgg_register_menu_item('dotorg_users', $item);
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
function community_theme_front_page($hook, $type, $return, $params) {
	if ($return == true) {
		// another hook has already replaced the front page
		return $return;
	}

	$site = elgg_extract('HTTP_HOST', $_SERVER);
	// @todo we need to find a way to run on test and production server
	$site = 'community.elgg.org';
	switch ($site) {
		case 'community.elgg.org':
			elgg_push_context('community');
			$body = elgg_view_layout('community_landing_page');
			echo elgg_view_page('', $body);
			break;

		case 'elgg-master.mbp':
		case 'www.elgg.org':
		case 'elgg.org':
		default:
			elgg_push_context('dotorg');
			elgg_load_js('jquery.coda_slider');
			elgg_load_css('jquery.coda_slider');
			elgg_load_js('elgg.dotorg');

			$body = elgg_view_menu('dotorg_site', array(
				'class' => 'elgg-menu-hz',
				'sort_by' => 'register'
			));

			$body .= elgg_view_layout('one_sidebar', array(
				'content' => elgg_view('dotorg/landing_content'),
				'sidebar' => elgg_view('dotorg/landing_sidebar')
			));

			$title = 'Elgg.org';
			echo elgg_view_page($title, $body, 'dotorg', array(
				'page_class' => 'elgg-page-dotorg-landing'
			));
			break;

		default:
			return false;
	}

	
	return true;
}
	