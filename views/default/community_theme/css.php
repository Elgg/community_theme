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
?>
/* <style> /**/

/* ***************************************
	Common
*************************************** */
body {
	background-color: #161C20;
}
.elgg-page-body {
	background-color: #FFFFFF;
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
.elgg-form-account {
	float: left;
	width: 50%;
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
	Modules
*************************************** */
.elgg-module-community {
	margin: 20px;
	position: relative;
}
.elgg-module-community .elgg-head {
	padding-bottom: 10px;
}
.elgg-module-community h3 {
	font-size: 24px;
	color: #222222;
}
.elgg-module-community ul {
	margin:0;
	padding: 10px 0 0;
	list-style: none;
}
.elgg-module-community li {
	padding: 0 0 20px 0;
	margin-top: 10px;
}
.elgg-module-community li:last-child {
	padding-bottom: 0;
}
.elgg-module-register {
	float: right;
	width: 45%;
	margin-top: 10px;
}
.elgg-module-register .elgg-head {
	margin-bottom: 5px;
	padding-bottom: 5px;
}
/* ***************************************
	Buttons
*************************************** */
.elgg-module-community .elgg-button {
	display: block;	
	text-align: center;
	font-size: 24px;
	background: #60B8F7;
	padding: 15px 0;
	margin: 20px 0 0;
}
.elgg-module-community .elgg-button:hover {
	background: #74C5F4;
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
		padding: 20px 0;
	}
	.elgg-grid .first {
		padding: 0 0 20px 0;
	}
	.elgg-grid .middle {
		background-color: #F5F5F5;
		padding: 20px 0;
	}
	.elgg-grid .last {
		padding: 20px 0 0;
	}
	.elgg-form-account {
		max-width: 100%;
        width: 100%;
    }
	.elgg-module-community {
		margin: 20px;
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
