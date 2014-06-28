<?php
/**
 * Community index
 * 
 */

elgg_push_context('community');
$class = array('class' => 'community-landing-page');

$body = elgg_view_layout('community_landing_page');
echo elgg_view_page(null, $body, 'default', array('body_attrs' => $class));
