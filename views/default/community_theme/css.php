<?php
/**
 * Custom Index page css extender
 *
 * @package custom_index
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Curverider <info@elgg.com>
 * @copyright Curverider Ltd 2008-2009
 * @link http://elgg.org/
 */
?>

#index_spotlight #top_left h1 span {
	font-weight:bold;
}
#index_spotlight #top_left h1 {
	color:#666666;
	font-family:Arial,sans-serif;
	font-size:2.8em;
	font-weight:normal;
}
#index_spotlight #top_left h2 {
	color:#999999;
	font-weight:normal;
	font-size:1.8em;
}
#top_left {
	position: relative;
	min-height: 240px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	border: 1px solid silver;
	margin-right: 30px;
	padding: 5px 10px;
	background: url(<?php echo $vars['url']; ?>mod/community_theme/graphics/homepage_spotlight_image.gif) no-repeat right center;
}

/* IE 6 fix */
* html #top_left {
	height: 240px;
}
/* IE 7 fix */
*:first-child+html #top_left {
	height: 240px;
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
	background: url(<?php echo $vars['url']; ?>mod/community_theme/graphics/homepage_join.gif) no-repeat left top;
}
#top_left .homepage_join_link:hover {
	background: url(<?php echo $vars['url']; ?>mod/community_theme/graphics/homepage_join_over.gif) no-repeat left top;
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
	background:url(<?php echo $vars['url']; ?>mod/community_theme/graphics/homepage_plugins.gif) no-repeat bottom center;
	margin-left: 0;
}

.elgg-module-community-discussion {
	background:url(<?php echo $vars['url']; ?>mod/community_theme/graphics/homepage_groups.gif) no-repeat bottom center;
}

.elgg-module-community-more {
	background:url(<?php echo $vars['url']; ?>mod/community_theme/graphics/homepage_box.gif) no-repeat bottom center;
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

.homepage_more_link {
	display: block;
	position: absolute;
	overflow: hidden;
	bottom: 10px;
	right: 10px;
	width: 68px;
	height: 22px;
	text-indent: 9999em;
	background:url(<?php echo $vars['url']; ?>mod/community_theme/graphics/homepage_more.gif) no-repeat left top;
}

.homepage_more_link:hover {
	background:url(<?php echo $vars['url']; ?>mod/community_theme/graphics/homepage_more_over.gif) no-repeat left top;
}

#persistent_login {
	float:right;
	display:block;
	margin-top:-34px;
}

#login-box {
	min-height:241px;
}

#openid_login #login-boxs form {
	background: none;
	margin:0;
	padding:5px 0 4px 0;
}

#wrapper_header #logo {
	background: url(<?php echo $vars['url']; ?>mod/community_theme/graphics/elgg.org.logo.gif) no-repeat left top;
	height:68px;
	margin:0pt;
	padding:0pt;
	width:125px;
}
#wrapper_header {

}
#wrapper_header #menu {
	height:30px;
	margin:0pt auto;
	padding:0pt;
	text-align:left;
}

#menu-inner {
	width:998px;
	text-align:right;
	margin:0 auto;
	padding:0;
}
#menu-inner a span { cursor: pointer; }
#menu a:active { outline: none; }
#menu a:focus { -moz-outline-style: none; }

#menu a {
	float:right;
	margin:0;
	padding:0 0 0 10px;
	text-decoration:none;
	font-weight: bold;
	font-size: 110%;
	line-height:1.6em;
}
#menu a span {
	float:left;
	display:block;
	padding:3px 14px 0px 3px;
	height:27px;
	margin:0;
	color:#ffffff;
}
#menu a.disabled span {
	color:#547faa;
}
#menu a.disabled {
	color:#547faa;
}
#menu a.disabled:hover {
	color:#547faa;
}
#menu a.disabled:hover span {
	color:#547faa;
}

/* IE 6 &amp; 7 fix */
* html #menu a span  {
	height:30px;
}

#menu a:hover span {
	color:#00487d;
}
#menu a:hover {
	color:#00487d;
}

#menu a.selected {
	background: url(<?php echo $vars['url']; ?>mod/community_theme/graphics/community_tab_left_selected.gif) no-repeat left top;
}
#menu a.selected span {
	background: url(<?php echo $vars['url']; ?>mod/community_theme/graphics/community_tab_right_selected.gif) no-repeat right top;
	color:#00487d;
}

#submenu {
	/* margin:7px 5px 0 5px; */
	height:30px;
	padding-top:4px;
	padding-left:7px;
}
#submenu a {
	font-size:1.1em;
	font-weight:bold;
	margin:0 5px 0 0;
	padding:3px 10px 3px 10px;
	float:left;
	display:block;
	height:20px;
}
#submenu a.selected {
	color:#62b3f8;
	background:white;
	-moz-border-radius-topleft:4px;
	-moz-border-radius-topright:4px;
	-webkit-border-top-left-radius:4px;
	-webkit-border-top-right-radius:4px;
}
#submenu a:hover {
	text-decoration: none;
}

#elgg_topbar_container_right .community_login {
    background: transparent;
    color: #EEEEEE;
    display: block;
    height: 20px;
    margin: 0 5px 0 0;
    padding: 0;
}

/*-----------------------------
	GLOBAL HEADER #00acf7
-----------------------------*/
#globalheader_wrapper {
	background-color:#00acf7; 
	width: 100%;
	height: 30px;
	margin: 0 auto;
}
#globalheader {
	position:relative;
	width: 970px;
	margin-left: auto;
	margin-right: auto;
}
#globalheader ul  {float:right; margin: 5px 0 0 0px;}
#globalheader ul {
    font-size: 100%;
	line-height: 125%;
	font-family: Arial,sans-serif;
}
#globalheader li  {display:inline;list-style-type:none;padding: 0 0 0 15px;}
#globalheader li a {
    border-radius: 10px 10px 10px 10px;
    padding: 2px 9px;
    text-decoration: none;
}
#globalheader li a:hover {
    background-color: #027BB3;
    color: white;
}
.header.selected {
    background-color: white;
    color: #333333;
    font-weight: normal;
}
.header {color: #f1f1f1;}
.header:hover {color:black;text-decoration: none;}

#supportbanner {
	height:26px;
	color:white;
	background:black;
	text-align:center;
	width:100%;
	padding-top:4px;
}
#supportbanner a {
	color:white;
	text-decoration:underline;
}
#supportbanner a:hover {
	color:#e74815;
	text-decoration:underline;
}



/* PC IE 6&amp;7 */
* html #cse-search-box {

}
* html #cse-search-box input {
	height:25px;
	background-image: none !important;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border:3px solid white;
	padding:0;
	margin:3px;
}
* html #cse-search-box input.gsearchsubmit {
	font: 13px/100% Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: white;
	background:#547faa;
	border: 3px solid #547faa;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	width: auto;
	height: 25px;
	padding: 1px;
	margin:3px;
	cursor: pointer;
}
/* end PC IE rules */
