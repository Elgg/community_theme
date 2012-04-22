<?php
/**
 * Elgg logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();

$src = elgg_normalize_url("mod/community_theme/graphics/logo.png");

?>

<h1>
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
		<img src="<?php echo $src; ?>" width="144" height="76" />
	</a>
</h1>
