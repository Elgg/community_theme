<?php
/**
 * Front page layout
 */
?>

<div class="elgg-grid">
	<div class="elgg-col elgg-col-1of3 first">
		<?php echo elgg_view('community_theme/modules/plugins'); ?>
	</div>
	<div class="elgg-col elgg-col-1of3 middle">
		<?php echo elgg_view('community_theme/modules/showcase'); ?>
	</div>
	<div class="elgg-col elgg-col-1of3 last">
		<?php echo elgg_view('community_theme/modules/help'); ?>
	</div>
</div>
