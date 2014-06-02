<?php
/**
 * Community Theme css extensions
 *
 * Light grey: #eeeeee
 * Dark grey: #bebebe
 * Grey text: #666666
 *
 * Dark blue: #0054A7
 * Lighter dark blue: #4690D6
 * Light header blue: #00b1f7
 * 
 */

$gfx = elgg_normalize_url('mod/community_theme/graphics/');
?>
/* <style> /**/

/*****
Common
*****/
body {
	background-color: #161C20;
}

.elgg-page-body {
	background-color: white;
}
.elgg-page-footer {
	padding: 0;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	height: 70px;
}
.elgg-page-header > .elgg-inner h1 {
	padding-top: 0; <?php /* Aalborg theme adds 10px padding for narrow view */ ?>
}
/* ***************************************
	Footer
*************************************** */
.elgg-page-default .elgg-page-footer {
	color: #415561;
	background-color: #161C20;
}
.elgg-page-default .elgg-page-footer a {
	color: #415561;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	max-width: 1030px;
	margin: 0 auto;	
	padding: 30px 0 0;
	border: 0;
}
.elgg-page-default .elgg-page-footer h2 {
	color: #415561;
	padding-bottom: 12px;
	margin-bottom: 12px;
	font-weight: normal;
	border-bottom: 1px solid #374751;
}
.elgg-page-footer .elgg-module {
	margin: 10px 20px 20px;
}
.elgg-menu-footer-navigation {
	padding-left: 15px;
	list-style: disc outside none;
}
.elgg-menu-footer > li:before {
	color: #415561;
}
.elgg-menu-footer-default {
	padding-right: 20px;
}
.elgg-menu-footer-meta {
	padding-left: 20px;
}

/*
@todo The top_left stuff needs cleaned up.
*/

#top_left {
	position: relative;
	min-height: 240px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	border: 1px solid silver;
	margin-right: 30px;
	padding: 5px 10px;
	background: url(<?php echo elgg_get_site_url(); ?>mod/community_theme/graphics/homepage_spotlight_image.gif) no-repeat right center;
}

/* IE 6 fix */
* html #top_left {
	height: 240px;
}
/* IE 7 fix */
*:first-child+html #top_left {
	height: 240px;
}

#top_left h1 {
	color:#666666;
	font-family:Arial,sans-serif;
	font-size:2.8em;
	font-weight:normal;
	line-height: 1.4em;
}

#top_left h1 span {
	font-weight:bold;
}

#top_left h2 {
	color:#999999;
	font-weight:normal;
	font-size:1.8em;
}


#top_right .homepage_stats h2 {
	color:#0054A7;
	margin-bottom:15px;
}
#top_right .homepage_stats {
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	border:1px solid silver;
	padding:5px 10px;
	min-height: 240px;
	background: #FDFFC3;
}

#top_left .homepage_join_link {
	display:block;
	position: absolute;
	bottom: 10px;
	left: 10px;
	width: 213px;
	height: 37px;
	background: url(<?php echo elgg_get_site_url(); ?>mod/community_theme/graphics/homepage_join.gif) no-repeat left top;
}
#top_left .homepage_join_link:hover {
	background: url(<?php echo elgg_get_site_url(); ?>mod/community_theme/graphics/homepage_join_over.gif) no-repeat left top;
}

.elgg-module-community {
	border:1px solid silver;
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	margin: 0 10px;
	padding: 10px;
	height: 280px;
	position: relative;
}

.elgg-module-community-plugins {
	background:url(<?php echo elgg_get_site_url(); ?>mod/community_theme/graphics/homepage_plugins.gif) no-repeat bottom center;
	margin-left: 0;
}

.elgg-module-community-discussion {
	background:url(<?php echo elgg_get_site_url(); ?>mod/community_theme/graphics/homepage_groups.gif) no-repeat bottom center;
}

.elgg-module-community-more {
	background:url(<?php echo elgg_get_site_url(); ?>mod/community_theme/graphics/homepage_box.gif) no-repeat bottom center;
	margin-right: 0;
}

.elgg-module-community-more ul {
	margin:0;
	padding:0;
	list-style: none;
}

.elgg-module-community-more li {
	padding:0px 0 10px 55px;
	margin:0;
}
.elgg-module-community-more .bug_tracker {
	background:url(<?php echo elgg_get_site_url(); ?>mod/community_theme/graphics/homepage_bullet_bug_tracker.gif) no-repeat left top;
}
.elgg-module-community-more .mailing_list {
	background:url(<?php echo elgg_get_site_url(); ?>mod/community_theme/graphics/homepage_bullet_mailing_list.gif) no-repeat left top;
}
.elgg-module-community-more .api_reference {
	background:url(<?php echo elgg_get_site_url(); ?>mod/community_theme/graphics/homepage_bullet_api_reference.gif) no-repeat left top;
}
.elgg-module-community-more .chat {
	background:url(<?php echo elgg_get_site_url(); ?>mod/community_theme/graphics/homepage_bullet_chat.gif) no-repeat left top;
}

.homepage_more_link {
	display: block;
	position: absolute;
	overflow: hidden;
	bottom: 10px;
	right: 10px;
	width: 68px;
	height: 22px;
	text-indent: 9999em;
	background:url(<?php echo elgg_get_site_url(); ?>mod/community_theme/graphics/homepage_more.gif) no-repeat left top;
}

.homepage_more_link:hover {
	background:url(<?php echo elgg_get_site_url(); ?>mod/community_theme/graphics/homepage_more_over.gif) no-repeat left top;
}

#openid_login #login-boxs form {
	background: none;
	margin:0;
	padding:5px 0 4px 0;
}

.elgg-form-account {
	float: left;
	width: 50%;
}
.elgg-module-register {
	float: right;
	width: 45%;
}
.elgg-module-register .elgg-head {
	margin-bottom: 5px;
	padding-bottom: 5px;
}
/* ***************************************
	Responsive
*************************************** */
@media (max-width: 820px) {
	.elgg-form-account {
		max-width: 100%;
        width: 100%;
    }
    .elgg-module-register {
        width: 100%;
		margin-top: 20px;
    }
	.elgg-menu-footer-meta,
	.elgg-menu-footer-default {
		padding: 0 20px;
	}
}