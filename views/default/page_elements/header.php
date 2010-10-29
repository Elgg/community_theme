<?php
	/**
	 * Elgg pageshell
	 * The standard HTML header that displays across the site
	 *
	 * @package Elgg
	 * @subpackage Core
	 * @author Curverider Ltd
	 * @link http://elgg.org/
	 *
	 * @uses $vars['config'] The site configuration settings, imported
	 * @uses $vars['title'] The page title
	 * @uses $vars['body'] The main content of the page
	 * @uses $vars['messages'] A 2d array of various message registers, passed from system_messages()
	 */

	// Set title
		if (empty($vars['title'])) {
			$title = $vars['config']->sitename;
		} else if (empty($vars['config']->sitename)) {
			$title = $vars['title'];
		} else {
			$title = $vars['config']->sitename . ": " . $vars['title'];
		}

		global $autofeed;
		if (isset($autofeed) && $autofeed == true) {
			$url = full_url();
			if (substr_count($url,'?')) {
				$url .= "&amp;view=rss";
			} else {
				$url .= "?view=rss";
			}
			$feedref = <<<END

	<link rel="alternate" type="application/rss+xml" title="RSS" href="{$url}" />
END;
		} else {
			$feedref = "";
		}

		$version = get_version();
		$release = get_version(true);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="ElggRelease" content="<?php echo $release; ?>" />
	<meta name="ElggVersion" content="<?php echo $version; ?>" />
	<title><?php echo $title; ?></title>
	<link rel="SHORTCUT ICON" href="<?php echo $vars['url']; ?>mod/theme_community_header/favicon.ico" />

	<script type="text/javascript" src="<?php echo $vars['url']; ?>vendors/jquery/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="<?php echo $vars['url']; ?>vendors/jquery/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo $vars['url']; ?>vendors/jquery/jquery.form.js"></script>
	<script type="text/javascript" src="<?php echo $vars['url']; ?>_css/js.php?lastcache=<?php echo $vars['config']->lastcache; ?>&amp;js=initialise_elgg&amp;viewtype=<?php echo $vars['view']; ?>"></script>
<?php
	global $pickerinuse;
	if (isset($pickerinuse) && $pickerinuse == true) {
?>
	<!-- only needed on pages where we have friends collections and/or the friends picker -->
	<script type="text/javascript" src="<?php echo $vars['url']; ?>vendors/jquery/jquery.easing.1.3.packed.js"></script>
	<script type="text/javascript" src="<?php echo $vars['url']; ?>_css/js.php?lastcache=<?php echo $vars['config']->lastcache; ?>&amp;js=friendsPickerv1&amp;viewtype=<?php echo $vars['view']; ?>"></script>
<?php
	}
?>
	<!-- include the default css file -->
	<link rel="stylesheet" href="<?php echo $vars['url']; ?>_css/css.css?lastcache=<?php echo $vars['config']->lastcache; ?>&amp;viewtype=<?php echo $vars['view']; ?>" type="text/css" />

	<?php
		echo $feedref;
		echo elgg_view('metatags',$vars);
	?>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
		});
	</script>
<style type="text/css">
#page_container {
	margin:0;
	padding:0;
}

#layout_header {
	text-align:left;
	width:100%;
	height:98px;
}
#wrapper_header {
	margin:0;
	padding:0;
	position:relative;
}

#layout_canvas {
	margin-top:0;
}



#wrapper_header #logo {
	background: url(<?php echo $vars['url']; ?>mod/theme_community_header/graphics/elgg.org.logo.gif) no-repeat left top;
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
	background: url(<?php echo $vars['url']; ?>mod/theme_community_header/graphics/community_tab_left_selected.gif) no-repeat left top;
}
#menu a.selected span {
	background: url(<?php echo $vars['url']; ?>mod/theme_community_header/graphics/community_tab_right_selected.gif) no-repeat right top;
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

/*-----------------------------
	GLOBAL HEADER #00acf7
-----------------------------*/
#globalheader_wrapper {background-color:#00acf7; width: 100%;height: 60px;margin-left: auto;margin-right: auto;}
#globalheader {position:relative;width: 970px;margin-left: auto;margin-right: auto;}
#globalheader ul  {float:right; margin: 5px 0 0 0px;}
#globalheader li  {display:inline;list-style-type:none;padding: 0 0 0 30px;}
.header {color: #f1f1f1;}
.header:hover {color:black;text-decoration: none;}
.header.selected {color: white; font-weight: bold;}

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
/* end PC IE rules */</style>
</head>

<body>
