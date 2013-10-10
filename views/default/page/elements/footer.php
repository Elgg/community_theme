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
	<div class="elgg-col elgg-col-2of5">
		<?php echo $nav; ?>
	</div>
	<div class="elgg-col elgg-col-2of5">
		<h2><?php echo elgg_echo('community_theme:title:contact'); ?></h2>
		<p>info at elgg dot org</p>
	</div>
</div>
<div class="elgg-col elgg-col-2of5">
	<h2><?php echo elgg_echo('community_theme:title:legal'); ?></h2>
	<p><?php echo elgg_echo('community_theme:copyright'); ?></p>
	<p><?php echo elgg_echo('community_theme:trademark'); ?></p>
	<p><a href="http://elgg.org/domain.php"><?php echo elgg_echo('community_theme:policy'); ?></a>.</p>	
	<?php echo $footer; ?>
</div>