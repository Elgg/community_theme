<?php
/**
 * Scrollable banner with download buttons and screen shots
 */

$gfx = elgg_normalize_url('mod/community_theme/graphics');

$title = 'Introducing a powerful open source social networking engine.';
$body = 'Providing you with the tools you need to build socially aware applications.';
$blurb = elgg_view_module('featured', $title, $body);

// downloads
$href = elgg_view('output/url', array(
	'text' => '<h2>Download</h2>Elgg 1.7',
	'href' => 'elgg.org/download.php',
	'class' => 'elgg-button elgg-button-featured',
	'is_trusted' => true
));
$item = new ElggMenuItem('1.7', $href, false);
elgg_register_menu_item('dotorg_downloads', $item);

$href = elgg_view('output/url', array(
	'text' => '<h2>Download</h2>Elgg 1.8',
	'href' => 'elgg.org/download.php',
	'class' => 'elgg-button elgg-button-featured',
	'is_trusted' => true
));
$item = new ElggMenuItem('1.8', $href, false);
elgg_register_menu_item('dotorg_downloads', $item);

$downloads = elgg_view_menu('dotorg_downloads', array('class' => 'elgg-menu-hz'));
?>

<div class="elgg-banner">
	<div class="elgg-inner">
		<div class="float elgg-banner-blurb">
			<a class="elgg-banner-scroller elgg-banner-prev"><img src="<?php echo $gfx; ?>/slider-banner-left.png" width="22" height="33"></a>
			<?php
				echo $blurb;
				echo $downloads;
			?>
		</div>

		<div class="float-alt elgg-banner-screenshots">
			<img class="mrl"src="<?php echo $gfx;?>/pic.jpg" alt="Elgg Screenshot" />
			<a class="elgg-banner-scroller elgg-banner-next"><img src="<?php echo $gfx; ?>/slider-banner-right.png" width="22" height="33"></a>
		</div>
	</div>
</div>