<?php
/**
 * Front page layout
 */

?>
<div class="elgg-grid pvl">
	<div class="elgg-col elgg-col-3of4">
		<div id="top_left">
			<h1><span>elgg</span>Community</h1>
			<h2>Community support from<br />community members</h2>
			<?php
				if (!elgg_is_logged_in()) {
					echo elgg_view('output/url', array(
						'class' => 'homepage_join_link',
						'href' => '/register', 
						'text' => ' ', 
					));
				}
			?>
		</div>
	</div>
	<div class="elgg-col elgg-col-1of4">
	<?php
		if (!elgg_is_logged_in()) {
			echo elgg_view_module('aside', 'Login', elgg_view_form('login'));
		} else {
			echo elgg_view_module('aside', 'Welcome', '<p>Welcome to this community which has been set up for users of Elgg to support each other.</p>');
		}
	?>
	</div>
</div>
<div class="elgg-grid mvl">
	<div class="elgg-col elgg-col-1of3">
		<?php echo elgg_view_module('community', 'Plugins', elgg_view('community_theme/modules/plugins'), array(
			'class' => 'elgg-module-community-plugins',
		)); ?>
	</div>
	<div class="elgg-col elgg-col-1of3">
		<?php echo elgg_view_module('community', 'Discussion', elgg_view('community_theme/modules/discussion'), array(
			'class' => 'elgg-module-community-discussion',
		)); ?>
	</div>
	<div class="elgg-col elgg-col-1of3">
		<?php echo elgg_view_module('community', 'More', elgg_view('community_theme/modules/more'), array(
			'class' => 'elgg-module-community-more',
		)); ?>
	</div>
</div>
