<?php
/**
 * Elgg register form
 *
 * @package Elgg
 * @subpackage Core
 * @author Curverider Ltd
 * @link http://elgg.org/
 */

$username = get_input('u');
$email = get_input('e');
$name = get_input('n');

$admin_option = false;
if (($_SESSION['user']->admin) && ($vars['show_admin'])) {
	$admin_option = true;
}

$form_body = "<p><label>" . elgg_echo('name') . "<br />" . elgg_view('input/text' , array('internalname' => 'name', 'class' => "general-textarea", 'value' => $name)) . "</label><br />";

$form_body .= "<label>" . elgg_echo('email') . "<br />" . elgg_view('input/text' , array('internalname' => 'email', 'class' => "general-textarea", 'value' => $email)) . "</label><br />";
$form_body .= "<label>" . elgg_echo('username') . "<br />" . elgg_view('input/text' , array('internalname' => 'username', 'class' => "general-textarea", 'value' => $username)) . "</label><br />";
$form_body .= "<label>" . elgg_echo('password') . "<br />" . elgg_view('input/password' , array('internalname' => 'password', 'class' => "general-textarea")) . "</label><br />";
$form_body .= "<label>" . elgg_echo('passwordagain') . "<br />" . elgg_view('input/password' , array('internalname' => 'password2', 'class' => "general-textarea")) . "</label><br />";

// view to extend to add more fields to the registration form
$form_body .= elgg_view('register/extend');

// Add captcha hook
$form_body .= elgg_view('input/captcha');

if ($admin_option) {
	$form_body .= elgg_view('input/checkboxes', array('internalname' => "admin", 'options' => array(elgg_echo('admin_option'))));
}

$form_body .= elgg_view('input/hidden', array('internalname' => 'friend_guid', 'value' => $vars['friend_guid']));
$form_body .= elgg_view('input/hidden', array('internalname' => 'invitecode', 'value' => $vars['invitecode']));
$form_body .= elgg_view('input/hidden', array('internalname' => 'action', 'value' => 'register'));
$form_body .= elgg_view('input/submit', array('internalname' => 'submit', 'value' => elgg_echo('register'))) . "</p>";

$register_form = elgg_view('input/form', array('action' => "{$vars['url']}action/register", 'body' => $form_body));

echo <<<___END
<div id="register-box" style="float: left; width: 45%;">
<h2><?php echo elgg_echo('register'); ?></h2>
$register_form
</div>

<div style="margin-right: 2em; float: right; width: 45%;">
<h2>Welcome to the Elgg Community!</h2>

<p>To keep this community site useful and safe for all, please:</p>
<ul>
	<li>Use the <a href="http://demo.elgg.org">Demo Elgg Site</a> to test Elgg.  (Test content on the community site will be deleted.)</li>
	<li>Be courteous, friendly, and patient with all members of the site.</li>
	<li>Be respectful of plugin developers' time and priorities.</li>
	<li>Read and follow the <a href="http://community.elgg.org/pg/expages/read/Terms/">Terms and Conditions.</a></li>
</ul>
</div>


___END;

?>
