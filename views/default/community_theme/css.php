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

/*****
Common
*****/
body {
	background-color: #1B1B1B;
}

.elgg-page-body {
	background-color: white;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	height: 105px;
}

/* ***************************************
	Front page
*************************************** */
.elgg-front-page-featured {
	display: block;
	width: 100%;
	height: 400px;
	overflow: hidden;
	background: url(<?php echo $vars['url']; ?>mod/community_theme/graphics/featured.jpg) center top no-repeat;
}
.elgg-front-page-featured > .elgg-inner {
	width: 990px;
	margin: 0 auto;
}
#top_left {
	position: relative;
	top: 140px;
	margin-right: 50px;
	padding: 0;
}
#top_left h1 {
	font-family: "Helvetica Neue", Helvetica, "Lucida Grande", Arial, sans-serif;
	color: #FFFFFF;
	font-size: 3.2em;
	font-weight: normal;
	padding-bottom: 30px;
}
#top_left h1 span {
	font-weight:bold;
}
#top_left h2 {
	color: #999999;
	font-weight: normal;
	font-size: 1.8em;
}
#top_right {
	position: relative;
	float: right;
	top: 140px;
	width: 100%;
}
.elgg-front-page-featured ul li {	
	margin-bottom: 20px;
	padding-left: 20px;
}
.elgg-front-page-featured ul li a {
	display: block;	
	text-align: center;
	color: #FFFFFF;
	font-size: 24px;
	background: #64BEF2;
	border-radius: 5px;
	padding: 15px 0;
}
.elgg-front-page-featured ul li a:hover {
	background: #74C5F4;
}
	
/* ***************************************
	Footer
*************************************** */
.elgg-page-default .elgg-page-footer {
	background-color: #1B1B1B;
	width: 100%;
}
.elgg-page-default .elgg-page-footer a {
	color: #999;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	border: 0;
	padding: 20px 0;
}
.elgg-page-default .elgg-page-footer h2 {
	color: #999;
	padding-bottom: 12px;
	margin-bottom: 12px;
	font-weight: normal;
	border-bottom: 1px solid #444;
}
.elgg-page-footer .elgg-col-3of5 .elgg-col-2of5 {
	padding-right: 10%;
}
.elgg-menu-footer-navigation {
	float: left;
}

.elgg-menu-footer-navigation > li {
	display: block;
	padding: 0 0 2px 14px;
	background: url("<?php echo $gfx; ?>/bullets.gif") no-repeat scroll left center transparent;
}
.elgg-menu-footer-navigation > li:after {
	content: none;
	padding: 0;
}
/* ***************************************
	Modules
*************************************** */
.elgg-module-community {
	background: #EEEEEE;
	border: 1px solid #DDDDDD;
	border-radius: 6px;
	margin: 15px;
	padding: 20px;
	min-height: 280px;
	position: relative;
}
.elgg-module-community .elgg-head {
	padding-bottom: 10px;
}
.elgg-module-community h3 {
	font-size: 24px;
	color: #222222;
}
.elgg-module-community-plugins {	
	margin-left: 0;
}
.elgg-module-community-more {
	margin-right: 0;
}
.elgg-module-community-more ul {
	margin:0;
	padding: 10px 0 0;
	list-style: none;
}
.elgg-module-community-more li {
	padding:0px 0 10px 55px;
	margin:0;
}
.elgg-module-community-more .bug_tracker {
	background:url(<?php echo $vars['url']; ?>mod/community_theme/graphics/homepage_bullet_bug_tracker.gif) no-repeat left top;
}
.elgg-module-community-more .mailing_list {
	background:url(<?php echo $vars['url']; ?>mod/community_theme/graphics/homepage_bullet_mailing_list.gif) no-repeat left top;
}
.elgg-module-community-more .api_reference {
	background:url(<?php echo $vars['url']; ?>mod/community_theme/graphics/homepage_bullet_api_reference.gif) no-repeat left top;
}
.elgg-module-community-more .chat {
	background:url(<?php echo $vars['url']; ?>mod/community_theme/graphics/homepage_bullet_chat.gif) no-repeat left top;
}
/* ***************************************
	Buttons
*************************************** */
.homepage_more_link {
	position: absolute;
	display: block;
	bottom: 20px;
	left: 20px;
	right: 20px;
	text-align: center;
	color: #FFFFFF;
	font-size: 24px;
	background: #64BEF2;
	border-radius: 5px;
	padding: 15px 0;
}
.homepage_more_link:hover {
	color: #FFFFFF;
	background: #74C5F4;
}
#openid_login #login-boxs form {
	background: none;
	margin:0;
	padding:5px 0 4px 0;
}
.elgg-form-register {
	float: left;
	width: 50%;
}