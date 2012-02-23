<?php
/**
 * Community Theme css extensions
 */
?>

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

#top_left h1 {
	color:#666666;
	font-family:Arial,sans-serif;
	font-size:2.8em;
	font-weight:normal;
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

#openid_login #login-boxs form {
	background: none;
	margin:0;
	padding:5px 0 4px 0;
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
#globalheader ul  {float:right; margin: 7px 0 0 0px;}
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

.elgg-form-register {
	float: left;
	width: 50%;
}
/* end PC IE rules */
