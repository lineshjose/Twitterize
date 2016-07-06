<?php /*
	Template Name: Default Page
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
<!-- Title -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1> <?php the_title(); ?></h1>
<!-- end Title -->

<!-- Post starts -->
<div  id="posts" class="<?php the_ID(); ?>">
<?php edit_post_link('Edit','<!-- Post Edit--><div class="alignright"><b>','</b></div><div class="clearboth"></div>'); ?> 
			
<div class="post_data">
<?php the_content(); ?>
</div>
</div>
<!-- Post Ends -->
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>