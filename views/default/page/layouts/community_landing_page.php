<?php
/**
 * Front page layout
 */

?>

<div class="elgg-grid">
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
