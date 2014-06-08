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

/* ***************************************
	Common
*************************************** */
body {
	background-color: #161C20;
}
.elgg-page-body {
	background-color: white;
}
.elgg-page-footer,
.community-landing-page .elgg-page-body {
	padding: 0;
}
.community-landing-page .elgg-page-body > .elgg-inner {
	max-width: 100%;
	width: 100%;
}
.community-landing-page .elgg-grid {
	max-width: 1030px;
	margin: 0 auto;	
	padding: 30px 0;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	height: 70px;
}
.elgg-page-header > .elgg-inner h1 {
	padding-top: 0; <?php /* Aalborg theme adds 10px padding for narrow view */ ?>
}
/* ***************************************
	Featured module
*************************************** */
.elgg-featured-container, .elgg-featured {	
	position: relative;
	zoom: 1;		
}
.elgg-featured-container {
	margin: 0;
	max-height: 550px;
	overflow: hidden;
	background: #FFF;	
}
.elgg-featured-container .featured-image {
	height: 550px;
}
.featured-image {
    background: url(<?php echo elgg_get_site_url(); ?>mod/community_theme/graphics/featured.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
	
    display: block;
    position: relative;
    width: 100%;
	height: 550px;
}
.elgg-caption {
	padding: 0 20px;	
	height: 550px;
}
.elgg-caption .elgg-inner {
	text-align: center;
	width: 600px;
	margin: 0 auto;
	position: relative;
	top: 40%;
}
.elgg-caption h1 {
	color: #F7F1E9;
	font-size: 3.6em;
	font-weight: normal;
	padding-bottom: 30px;
}
.elgg-caption h1 span {
	font-weight: bold;
}
.elgg-caption h2 {
	color: #FFF;
	font-weight: normal;
	font-size: 2.0em;
}

/* ***************************************
	Footer
*************************************** */
.elgg-page-footer .elgg-grid {
	padding: 20px 0 0;
}
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
	padding: 0;
	border: none;
}
.elgg-page-default .elgg-page-footer h2 {
	color: #415561;
	padding-bottom: 12px;
	margin-bottom: 12px;
	font-weight: normal;
	border-bottom: 1px solid #374751;
}
.elgg-page-footer .elgg-module {
	margin: 20px;
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
	margin-left: 20px;
}

.elgg-module-community-discussion {
	background:url(<?php echo elgg_get_site_url(); ?>mod/community_theme/graphics/homepage_groups.gif) no-repeat bottom center;
}

.elgg-module-community-more {
	background:url(<?php echo elgg_get_site_url(); ?>mod/community_theme/graphics/homepage_box.gif) no-repeat bottom center;
	margin-right: 20px;
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
@media (max-width: 1030px) {
	.elgg-featured-container {
		max-height: 450px;
	}
	.elgg-caption,
	.elgg-featured-container .featured-image {
		height: 450px;
	}
}
@media (max-width: 820px) {
	.community-landing-page .elgg-grid {
		padding: 30px 0 10px;
	}
	.elgg-form-account {
		max-width: 100%;
        width: 100%;
    }
	.elgg-module-community {
		margin: 0 20px 20px;
	}
    .elgg-module-register {
        width: 100%;
		margin-top: 20px;
    }
	.elgg-col-1of4,
	.elgg-col-3of4 {
		width: 100%;
	}
	.elgg-menu-footer-meta,
	.elgg-menu-footer-default {
		padding: 0 20px;
	}
}
@media (max-width: 766px) {
	.elgg-featured-container {
		max-height: 350px;
	}
	.elgg-caption,
	.elgg-featured-container .featured-image {
		height: 350px;
	}
	.elgg-caption .elgg-inner {
		width: auto;
	}
	.elgg-caption h1 {
		font-size: 2.8em;
		padding-bottom: 24px;
	}
	.elgg-caption h2 {
		font-size: 1.6em;
	}
}
