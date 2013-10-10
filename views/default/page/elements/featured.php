<?php
/**
 * Front page featured module
 */

$login_link = elgg_view('output/url', array(
	'class' => 'homepage_login_link',
	'href' => '/login', 
	'text' => elgg_echo('login'), 
));

$reg_link = elgg_view('output/url', array(
	'class' => 'homepage_reg_link',
	'href' => '/register', 
	'text' => elgg_echo('register'), 
));

$title = elgg_echo('community_theme:title:welcome');

?>

<div class="elgg-featured-container">
	<div class="elgg-front-page-featured">
		<div class="elgg-inner">
			<div class="elgg-col elgg-col-2of3">
				<div id="top_left">
					<h1><span>elgg</span>Community</h1>
					<h2><?php echo elgg_echo('community_theme:description'); ?></h2>
				</div>
			</div>
			<?php
			if (!elgg_is_logged_in()) { ?>
			<div class="elgg-col elgg-col-1of3">
				<div id="top_right">
					<ul>
						<li><?php echo $login_link; ?></li>
						<li><?php echo $reg_link; ?></li>
					</ul>
				</div>
			</div>				
			<?php 
			} 
			?>

		</div>
	</div>
</div>
