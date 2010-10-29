<?php

	/**
	 * Elgg footer
	 * The standard HTML footer that displays across the site
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @author Curverider Ltd
	 * @link http://elgg.org/
	 * 
	 */
	 
	 // get the tools menu
	//$menu = get_register('menu');

?>

<div class="clearfloat"></div>

<div id="layout_footer">
<table width="958" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="210" height="50">

		</td>
		
		<td width="748" height="50" align="right">
		<p class="footer_toolbar_links">
		<?php
			echo elgg_view('footer/links');
		?>
		</p>
		</td>
	</tr>
	
	<tr>
		<td width="210" height="28">
		<a href="http://www.elgg.org" target="_blank">
		<img src="<?php echo $vars['url']; ?>_graphics/powered_by_elgg_badge_drk_bckgnd.gif" border="0" alt="Powered by Elgg" />
		</a>
		</td>
		
		<td width="748" height="28" align="right">
		<p class="footer_legal_links"><small>
		 Powered by Elgg, the leading open source social networking platform
		</small>
		</p>
		</td>
	</tr>
</table>
</div><!-- /#layout_footer -->

<div class="clearfloat"></div>

</div><!-- /#page_wrapper -->
</div><!-- /#page_container -->
<!-- insert an analytics view to be extended -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-3487311-5");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>