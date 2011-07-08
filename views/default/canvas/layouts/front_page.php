<?php

	/**
	 * Elgg custom profile
	 * You can edit the layout of this page with your own layout and style. Whatever you put in the file
	 * will replace the frontpage of your Elgg site.
	 *
	 * @package Elgg
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 */

?>
<div id="custom_index">

<div id="index_spotlight">
	<div id="top_left">
		<h1><span>elgg</span>Community</h1>
		<h2>Community support from<br />community members</h2>
		<?php
			if(!isloggedin()){
		?>
			<div class="homepage_join_link"><a href="<? echo $vars['url']; ?>account/register.php"></a></div>
		<?php
			}
		?>
	</div>
	<div id="top_right">
	<?php
		if (!isloggedin()) {
			echo elgg_view("account/forms/login");
			echo "<div class=\"clearfloat\"></div>";
		}else{
	?>
		<div class="homepage_stats">
			<h2>Welcome</h2>
			<p>Welcome to this community which has been set up for users of Elgg to support each other.</p>
		</div>
	<?php
		}
	?>
	</div>
</div>
<div id="index_boxes">
	<div id="left_box">
	<h2>Plugins</h2>
	<p>Contribute, find, review</p>
		<div class="homepage_more_link"><a href="<? echo $vars['url']; ?>pg/plugins/all/"></a></div>
	</div>

	<div id="centre_box">
	<h2>Discussion</h2>
	<p>Community discussion is a great way to find support and help others</p>
		<div class="homepage_more_link"><a href="<? echo $vars['url']; ?>pg/groups/world/"></a></div>
	</div>

	<div id="right_box">
	<h2>More</h2>
	<p>Contribute to Elgg. Open source works best as a community&hellip;</p>
	<ul>
		<li class="bug_tracker"><b>Bug tracker</b><br /><a href="http://trac.elgg.org/elgg/">Core engine</a>.</li>
		<li class="mailing_list"><b>Mailing list and IRC</b><br /><a href="http://groups.google.com/group/elgg-development/">For developers</a> also <a href="http://webchat.freenode.net/?channels=#elgg">#Elgg on Freenode.net.</a></li>
		<li class="api_reference"><b>API reference</b><br />The best way to find out what functions exist. <a href="http://reference.elgg.org">Check it out</a>.</li>
	</ul>
	</div>
</div>
<div class="clearfloat"></div>
</div>

<!-- preload rollovers -->
<div id="preloadimages">
	<img src="<?php echo $vars['url']; ?>mod/custom_index/graphics/homepage_more_over.gif" alt="more graphic" />
	<img src="<?php echo $vars['url']; ?>mod/custom_index/graphics/homepage_join_over.gif" alt="join graphic" />
</div>
