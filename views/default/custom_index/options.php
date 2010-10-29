<?php
	//a login area which plugins can extend
	//we use fbconnect in area one, openid in area two and twitter in area three
	//each of those plugins must make sure they extend the correct area
?>
<div id="login_options" style="margin:0 0 4px 0;width:240px;">
<!-- twitter -->
<?php echo elgg_view('custom_index/login_option_one'); ?>
<div style="float:left;width:136px;margin:0 4px 8px 0;">
<!-- fbconnect -->
<?php echo elgg_view('custom_index/login_option_two'); ?>
</div>
<!-- openid -->
<?php echo elgg_view('custom_index/login_option_three'); ?>
</div>
