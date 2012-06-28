<?php
/**
 * Footer
 *
 */

$nav = elgg_view_menu('footer_navigation', array(
	'sort_by' => 'register',
	'show_section_headers' => true,
	'section' => 'default'
));

$footer = elgg_view_menu('footer', array(
	'class' => 'elgg-menu-hz float-alt ptl'
));

?>

<div class="elgg-col elgg-col-3of5">
	<div class="elgg-col elgg-col-1of2">
		<?php echo $nav; ?>
	</div>
	<div class="elgg-col elgg-col-1of2">
		<h2>Contact</h2>
		<p>info at elgg dot org</p>
	</div>
</div>
<div class="elgg-col elgg-col-2of5">
	<span class="float-alt">
	<h2>Legal</h2>
		&copy;2012 the Elgg Foundation<br />
		Elgg is a registered trademark of Thematic Networks.<br />
		<a href="http://elgg.org/domain.php">Domain policy</a>.<br />
	</span>
	<?php echo $footer; ?>
</div>