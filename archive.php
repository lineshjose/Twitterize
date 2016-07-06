<?php /*
	Template Name: Archives
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

<?php if (have_posts()): ?>
<?php $post = $posts[0]; ?>
<!-- Title -->
<h1>
<?php if (is_category()): ?><?php single_cat_title(); ?>
<?php elseif (is_day()): ?>Archive for <?php the_time('F jS, Y'); ?>
<?php elseif (is_month()): ?>Archive for <?php the_time('F, Y'); ?>
<?php elseif (is_year()): ?>Archive for <?php the_time('Y'); ?>
<?php elseif (is_author()): ?>Author Archive  <?php the_author_posts_link() ?>
<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])): ?>Blog Archives
<?php endif; ?>
</h1>
<!-- end Title -->

<!-- Posts starts -->
<?php while (have_posts()) : the_post(); ?>
<div  id="posts" class="<?php the_ID(); ?> posts">
	<!-- Author Avatar -->
	<div class="avatar"><a href="<?php echo get_author_posts_url(get_the_author_id());?>" title="<?php the_author();?>" alt="<?php the_author();?>"><?php echo get_avatar( get_the_author_email(), '35' );?></a></div> 
	<div class="posted">
		<div class="author"><!-- Author  name --><?php the_author_posts_link() ?></div>
		<div class="date"><!-- Post Date--><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?> </div>
		<ul>
		<?php edit_post_link('Edit','<!-- Post Edit--><li class="edit">','</li>'); ?> 
		<li class="comment"><!-- Post Comments--><?php comments_popup_link('0', '1', '%', ''); ?></li>
		</ul>
		<div class="clearboth"></div>
		<h2><!-- Post Title --><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<!-- Post Data-->
		<br><?php the_excerpt(); ?>	
	</div>
<div class="clearboth"></div>
</div>
<!-- Posts Ends -->
<?php endwhile; ?>

<?php if(is_paged()):?>
<!-- Navigation starts -->
<div id="navigation">
<?php next_posts_link('<div class="alignleft button">&laquo; Old Entries </div>') ?>
<?php previous_posts_link('<div class="alignright button">New Entries &raquo;</div>') ?>
<div class="clearboth"></div>
</div>
<!-- Navigation ends -->
<?php endif; ?>

<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>