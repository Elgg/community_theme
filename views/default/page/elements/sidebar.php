<?php
/**
 * Elgg sidebar contents
 *
 * Override to display section titles and only page menu if on elgg.org
 *
 * @uses $vars['sidebar'] Optional content that is displayed at the bottom of sidebar
 */

if (elgg_in_context('dotorg')) {
	echo elgg_view('dotorg/sidebar');
	return true;
}

echo elgg_view_menu('extras', array(
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
));

echo elgg_view('page/elements/owner_block', $vars);

echo elgg_view_menu('page', array('sort_by' => 'name'));

// optional 'sidebar' parameter
if (isset($vars['sidebar'])) {
	echo $vars['sidebar'];
}

// @todo deprecated so remove in Elgg 2.0
// optional second parameter of elgg_view_layout
if (isset($vars['area2'])) {
	echo $vars['area2'];
}

// @todo deprecated so remove in Elgg 2.0
// optional third parameter of elgg_view_layout
if (isset($vars['area3'])) {
	echo $vars['area3'];
}