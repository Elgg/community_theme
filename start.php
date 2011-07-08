<?php
/**
 * Elgg Community Theme
 */
     
register_elgg_event_handler('init', 'system', 'community_theme_init');

function community_theme_init() {

	elgg_extend_view('css', 'community_theme/css');
	elgg_extend_view('footer/analytics', 'js/community_theme/analytics');
	elgg_extend_view('metatags', 'community_theme/favicon');

	register_plugin_hook('index', 'system', 'community_theme_front_page');
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

		$body = elgg_view_layout('front_page');

		page_draw('', $body);

		// return true to signify that we have handled the front page
		return true;
}
	