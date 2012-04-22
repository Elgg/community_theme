<?php
/**
 * Footer
 *
 */

$items = array(
	'home' => array('Home', 'elgg.org'),
	'community' => array('Community', 'community.elgg.org'),
	'blog' => array('Blog', 'blog.elgg.org'),
	'hosting' => array('Hosting', 'elgg.org/hosting.php'),
	'services' => array('Services', 'elgg.org/services'),
	'docs' => array('Docs', 'docs.elgg.org'),
);

foreach ($items as $id => $info) {
	list($text, $href) = $info;
	$item = new ElggMenuItem($id, $text, $href);
	elgg_register_menu_item('footer', $item);
}

$links = elgg_view_menu('footer', array(
	'sort_by' => 'register',
	'class' => 'elgg-menu-hz',
	'show_section_headers' => true
));

?>

<div class="elgg-col elgg-col-3of5">
	<div class="elgg-col elgg-col-1of2">
		<?php echo $links; ?>
	</div>
	<div class="elgg-col elgg-col-1of2">
		<h2>Contact</h2>
		<p>info at elgg dot org</p>
	</div>
</div>
<div class="elgg-col elgg-col-2of5">
	<span class="float-alt">
	<h2>Legal</h2>
		&copy;2011 the Elgg Foundation<br />
		Elgg is a registered trademark of Thematic Networks.<br />
		Domain policy link.<br />
	</span>
</div>