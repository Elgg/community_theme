<?php
/**
 * Elgg login form
 *
 * @package Elgg
 * @subpackage Core
 */
?>
<div class="preview-item-content">
<a class="dropdown-item preview-item py-3">
<?php
echo elgg_view_field([
	'#type' => 'text',

	'name' => 'username',
	'autofocus' => true,
	'required' => true,
	'#label' => elgg_echo('loginusername'),
]);

?>
</a>
<a class="dropdown-item preview-item py-3">
<?php
echo elgg_view_field([
	'#type' => 'password',
	'name' => 'password',
	'required' => true,
	'#label' => elgg_echo('password'),
]);
?>
    </a>
    </div>
<?php

echo elgg_view('login/extend', $vars);

if (isset($vars['returntoreferer'])) {
	echo elgg_view_field([
		'#type' => 'hidden',
		'name' => 'returntoreferer',
		'value' => 'true'
	]);
}

ob_start();
?>
<div class="elgg-foot"><div class="preview-item-content">
        <a class="dropdown-item preview-item py-3">
	<label class="mtm float-alt">
		<input type="checkbox" name="persistent" value="true" />
		<?php echo elgg_echo('user:persistent'); ?>
	</label>
</a>
        <a class="dropdown-item preview-item py-3">
	<?php
	echo elgg_view('input/submit', array('value' => elgg_echo('login')));
        //echo 'test';
/*
	echo elgg_view_menu('login', array(
		'sort_by' => 'priority',
		'class' => 'elgg-menu-general elgg-menu-hz mtm',
	));*/
	?>
            </a>
</div>
    </div>
<?php
//$footer = ob_get_clean();
//elgg_set_form_footer($footer);
