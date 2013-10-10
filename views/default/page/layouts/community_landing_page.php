<?php
/**
 * Front page layout
 */

?>

<div class="elgg-grid pvl">
	<div class="elgg-col elgg-col-1of3">
		<?php echo elgg_view('community_theme/modules/plugins'); ?>
	</div>
	<div class="elgg-col elgg-col-1of3">
		<?php echo elgg_view('community_theme/modules/discussion'); ?>
	</div>
	<div class="elgg-col elgg-col-1of3">
		<?php echo elgg_view_module('community', 'More', elgg_view('community_theme/modules/more'), array(
			'class' => 'elgg-module-community-more',
		)); ?>
	</div>
</div>
