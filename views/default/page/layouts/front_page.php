<?php

	/**
	 * Elgg custom profile
	 * You can edit the layout of this page with your own layout and style. Whatever you put in the file
	 * will replace the frontpage of your Elgg site.
	 *
	 * @package Elgg
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 */

?>
<div class="elgg-grid mtl">
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
			echo elgg_view("account/forms/login");
			echo "<div class=\"clearfloat\"></div>";
		} else {
	?>
		<div class="homepage_stats">
			<h2>Welcome</h2>
			<p>Welcome to this community which has been set up for users of Elgg to support each other.</p>
		</div>
	<?php
		}
	?>
	</div>
</div>
<div class="elgg-grid mtl">
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
