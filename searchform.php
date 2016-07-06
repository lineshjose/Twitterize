<?php /*
	Template Name: Search Form
	URI: http://linesh.com/
	Description:  Feature-packed theme with a solid design, built-in widgets and a intuitive theme settings interface... Designed by <a href="http://linesh.com/">Linesh Jose</a>.
	Version: 11.1
	Author: Linesh Jose 
	Author URI: http://linesh.com/
	roTags: light, white,two-columns, Flexible-width, right-sidebar, left-sidebar, theme-options, threaded-comments, translation-ready, custom-header	
	http://linesh.com/
	Both the design and code are released under GPL.
	http://www.opensource.org/licenses/gpl-license.php
*/?>
<?php _e('<h2>Search</h2>'); ?>
<div>
	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
		<table cellpadding="0" cellspacing="0">
		<tr>
			<td>
			<input type="text" class="textbox searchbox" value="" name="s" id="s"  />
			<input type="hidden" id="searchsubmit" value="Search" />
			</td>
			<td><input type="submit" id="searchsubmit" value="Go" class="button searchbutton" /></td>
			</tr>
		</table>
	</form>
</div>