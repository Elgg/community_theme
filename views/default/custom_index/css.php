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

#custom_index {
	margin:10px;
}
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
	float:left;
	position: relative;
	width:640px;
	min-height: 240px;
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	border:1px solid silver;
	margin:0 30px 20px 0;
	padding:5px 10px;
	background: url(<?php echo $vars['url']; ?>mod/theme_community_header/graphics/homepage_spotlight_image.gif) no-repeat right center;
}
#top_right {
	float:left;
	width:200px;
}

/* IE 6 fix */
* html #top_left {
	height:240px;
}
/* IE 7 fix */
*:first-child+html #top_left {
	height:240px;
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
	width:212px;
	background: #FDFFC3;
}

#top_left .homepage_join_link a {
	display:block;
	position: absolute;
	bottom:10px;
	left:10px;
	width:213px;
	height:37px;
	background:url(<?php echo $vars['url']; ?>mod/theme_community_header/graphics/homepage_join.gif) no-repeat left top;
}
#top_left .homepage_join_link a:hover {
	/* background:url(<?php echo $vars['url']; ?>mod/theme_community_header/graphics/homepage_join_over.gif) no-repeat left top; */
}
#left_box, #centre_box, #right_box {
	float:left;
	width:275px;
	border:1px solid silver;
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	margin:0 19px 0 0;
	padding:10px;
	height:280px;
	position: relative;
}
#index_boxes h2 {
	color:#0054A7;
}



#left_box {
	background:url(<?php echo $vars['url']; ?>mod/theme_community_header/graphics/homepage_plugins.gif) no-repeat bottom center;
}

#centre_box {
	background:url(<?php echo $vars['url']; ?>mod/theme_community_header/graphics/homepage_groups.gif) no-repeat bottom center;
}
#right_box {
	margin-right:0px;
	background:url(<?php echo $vars['url']; ?>mod/theme_community_header/graphics/homepage_box.gif) no-repeat bottom center;

}

#right_box ul {
	margin:0;
	padding:0;
	list-style: none;
}

#right_box li {
	padding:0px 0 10px 55px;
	margin:0;
}
#right_box li.bug_tracker {
	background:url(<?php echo $vars['url']; ?>mod/theme_community_header/graphics/homepage_bullet_bug_tracker.gif) no-repeat left top;
}
#right_box li.mailing_list {
	background:url(<?php echo $vars['url']; ?>mod/theme_community_header/graphics/homepage_bullet_mailing_list.gif) no-repeat left top;
}
#right_box li.api_reference {
	background:url(<?php echo $vars['url']; ?>mod/theme_community_header/graphics/homepage_bullet_api_reference.gif) no-repeat left top;
}
#right_box li.chat {
	background:url(<?php echo $vars['url']; ?>mod/theme_community_header/graphics/homepage_bullet_chat.gif) no-repeat left top;
}
.homepage_more_link a {
	display:block;
	position: absolute;
	bottom:10px;
	right:10px;
	width:68px;
	height:22px;
	background:url(<?php echo $vars['url']; ?>mod/theme_community_header/graphics/homepage_more.gif) no-repeat left top;
}
.homepage_more_link a:hover {
	/* background:url(<?php echo $vars['url']; ?>mod/theme_community_header/graphics/homepage_more_over.gif) no-repeat left top; */
}


div#preloadimages {
	width: 0px;
	height: 0px;
	overflow: hidden;
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


