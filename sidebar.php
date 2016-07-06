<?php /*
	Template Name: Sidebar
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

</td>
<!-- Sidebar -->
<td id="sidebar">
<div class="social">
<?php if(get_option('linesh_twitter')) { ?><a href="http://twitter.com/<?php echo get_option('linesh_twitter');?>"><img src="<?php echo  get_stylesheet_directory_uri();?>/images/twitter.png" alt="<?php echo get_option('linesh_twitter');?>" title="Twitter - <?php echo get_option('linesh_twitter');?>" class="img"></a><?php }?>
<?php if(get_option('linesh_facebook')) { ?><a href="http://facebook.com/<?php echo get_option('linesh_facebook');?>"><img src="<?php echo  get_stylesheet_directory_uri();?>/images/facebook.png" alt="<?php echo get_option('linesh_facebook');?>" title="Facebook - <?php echo get_option('linesh_facebook');?>" class="img"></a><?php }?>
<?php if(get_option('linesh_myspace')) { ?><a href="http://myspace.com/<?php echo get_option('linesh_myspace');?>"><img src="<?php echo  get_stylesheet_directory_uri();?>/images/myspace.png" alt="<?php echo get_option('linesh_myspace');?>" title="Myspace - <?php echo get_option('linesh_myspace');?>" class="img"></a><?php }?>
<a href="<?php bloginfo_rss( 'rss2_url' ); ?>"><img src="<?php echo  get_stylesheet_directory_uri();?>/images/rss.png" alt="Subsrcibe Feed" title="Subsrcibe Feed"></a>
<a href="javascript:void();" onclick="bookmark('<?php bloginfo('url'); ?>', '<?php bloginfo('name'); ?>');"  ><img src="<?php echo  get_stylesheet_directory_uri();?>/images/bookmark.png" alt="Favorite" title="Add to Favorite"></a>
</div>
<?php get_search_form();?>
<?php 	/* Widgetized sidebar, if you have the plugin installed. */
	if (!dynamic_sidebar("Sidebar") ) : ?>
	<!-- Start Categories -->
		<?php _e('<h2>Categories</h2>'); ?>
		<div >
		<ul >
		<?php wp_list_categories('title_li='); ?>
		</ul>
	<!-- End Categories -->

	<!-- Start Archives -->
		<?php _e('<h2>Archives</h2>'); ?>
		<ul>
		<?php wp_get_archives('type=monthly'); ?>
		</ul>
	<!--End Archives -->
	<?php endif; ?>
		<!-- Start Feeds -->
		<?php _e('<h2>Feeds</h2>'); ?>
		<ul >		
		<li><a href="<?php bloginfo_rss( 'rss2_url' ); ?>" title="Syndicate this site using RSS 2.0">Entries <abbr title="Really Simple Syndication">RSS 2.0</abbr></a></li>
		<li><a href="<?php bloginfo_rss( 'atom_url' ); ?>" title="Syndicate this site using atom">Entries <abbr title="Really Simple Syndication">Atom</abbr></a></li>
		<li><a href="<?php bloginfo_rss( 'comments_rss2_url' ); ?>" title="The latest comments to all posts in RSS">Comments <abbr title="Really Simple Syndication">RSS 2.0</abbr></a></li>
		</ul>
	<!-- End Feeds -->
	
</td>
</tr> </table>
<!-- End page -->