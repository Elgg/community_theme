<?php 
$body =<<<WELCOME
	<p>To keep this community site useful and safe for all, please:</p>
	<ul>
		<li>Use the <a href="http://demo.elgg.org">Demo Elgg Site</a> to test Elgg.  (Test content on the community site will be deleted.)</li>
		<li>Be courteous, friendly, and patient with all members of the site.</li>
		<li>Be respectful of plugin developers' time and priorities.</li>
		<li>Read and follow the <a href="http://community.elgg.org/pg/expages/read/Terms/">Terms and Conditions.</a></li>
	</ul>
WELCOME;
?>

<div class="elgg-output" style="float: right; width: 45%;">
	<?php echo elgg_view_module('aside', 'Welcome to the Elgg Community!', $body); ?>
</div>
