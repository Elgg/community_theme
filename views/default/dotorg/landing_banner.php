<?php
/**
 * Scrollable banner with download buttons and screen shots
 */

$gfx = elgg_normalize_url('mod/community_theme/graphics');

$title = 'Introducing a powerful open source social networking engine.';
$body = 'Providing you with the tools you need to build socially aware applications.';
$blurb = elgg_view_module('featured', $title, $body);

$blurb2 = elgg_view_image_block(null, $blurb, array(
	'image_alt' => '<img class="mrl elgg-banner-screenshot" src="' . $gfx . '/pic.jpg" alt="Elgg Screenshot" />'
));

// downloads
echo elgg_view_menu('dotorg_downloads', array('class' => 'elgg-menu-hz'));
?>

<div id="coda-nav-left-1"><a class="elgg-banner-scroller elgg-banner-prev"><img src="<?php echo $gfx; ?>/slider-banner-left.png" width="22" height="33"></a></div>

<ul class="elgg-banner coda-slider preload" id="slider">
	<li class="elgg-inner panel">
		<div class="panel-wrapper float elgg-banner-blurb">
			<?php echo $blurb; ?>
		</div>
		<img class="elgg-screenshot float-alt" src="<?php echo $gfx;?>/pic.jpg" />
	</li>

	<li class="elgg-inner panel">
		<div class="panel-wrapper float elgg-banner-blurb">
			<?php echo $blurb; ?>
		</div>
		<img class="elgg-screenshot float-alt" src="<?php echo $gfx;?>/pic.jpg" />
	</li>
</ul>
<div id="coda-nav-right-1"><a class="elgg-banner-scroller elgg-banner-next"><img src="<?php echo $gfx; ?>/slider-banner-right.png" width="22" height="33"></a></div>