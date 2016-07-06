<?php /*
	Template Name: 404
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

<?php get_header(); ?>
<h1>Error 404 - Page Not Found</h1>
<br />
<p class="lefttext" >Sorry, but you are looking for something that isn't here.
<br /><br />
<div class="404">
	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
		<table cellpadding="0" cellspacing="3">
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
</p>
<?php get_sidebar(); ?>
<?php get_footer(); ?>