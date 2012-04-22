<?php
/**
 * Elgg Community Theme
 * 
 */
     
elgg_register_event_handler('init', 'system', 'community_theme_init');

function community_theme_init() {

	elgg_extend_view('css/elgg', 'community_theme/css');
	elgg_extend_view('page/elements/head', 'community_theme/ie_mode_metatag');

	elgg_register_plugin_hook_handler('index', 'system', 'community_theme_front_page');
	
	elgg_unregister_menu_item('site', 'bookmarks');
	elgg_unregister_menu_item('site', 'members');
	elgg_unregister_menu_item('site', 'pages');
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
	switch ($site) {
		case 'community.elgg.org':
			elgg_push_context('community');
			$body = elgg_view_layout('community_front_page');
			$title = 'Elgg Community Site';
			echo elgg_view_page($title, $body);
			break;

		case 'elgg-master.mbp':
		case 'www.elgg.org':
		case 'elgg.org':
		default:
			elgg_push_context('dotorg');

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

			$menu = elgg_view_menu('dotorg_site', array(
				'class' => 'elgg-menu-hz',
				'sort_by' => 'register'
			));

			$body = $menu;

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
	