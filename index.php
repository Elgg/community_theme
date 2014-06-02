<?php
/**
 * Elgg custom index page
 * 
 */

elgg_push_context('community');

$body = elgg_view_layout('community_landing_page');
echo elgg_view_page(null, $body);
