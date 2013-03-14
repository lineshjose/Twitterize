<?php /*
	Template Name: Post Content
	URI: http://lineshjose.com/
	Description:  Feature-packed theme with a solid design, built-in widgets and a intuitive theme settings interface... Designed by <a href="http://lineshjose.info/">Linesh Jose</a>.
	Version: 11.1
	Author: Linesh Jose 
	Author URI: http://linesjose.com
	roTags: light, white,two-columns, Flexible-width, right-sidebar, left-sidebar, theme-options, threaded-comments, translation-ready, custom-header	
	http://lineshjose.com/
	Both the design and code are released under GPL.
	http://www.opensource.org/licenses/gpl-license.php
*/?>

<?php get_header(); ?>
<!-- Title -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1> <?php the_title(); ?></h1>
<!-- end Title -->
<!-- Post starts -->
<div  id="posts" class="<?php the_ID(); ?>" class="">
	
		<!-- Author Avatar -->
		<div class="avatar"><a href="<?php echo get_author_posts_url(get_the_author_id());?>" title="<?php the_author();?>" alt="<?php the_author();?>"><?php echo get_avatar( get_the_author_email(), '35' );?></a></div> 
		<div class="posted">
			<div class="author"><!-- Author  name --><?php the_author_posts_link() ?></div>
			<div class="date"><!-- Post Date--> on  <?php the_date()?></div>
			<ul>
			<?php edit_post_link('Edit','<!-- Post Edit--><li class="edit">','</li>'); ?> 
			<li class="comment"><!-- Post Comments--><?php comments_popup_link('0', '1', '%', ''); ?></li>
			</ul>
			<div class="clearboth"></div>
			<div style="padding-top:5px;"}><!-- Post Categories -->Posted in : <?php the_category(' , ') ?></div>
			
		</div>
		<div class="clearboth"></div>
	
	<!-- Post Data-->
	<div class="post_data">
	<?php the_content(); ?>
	<?php wp_link_pages(array('before' => '<div id="navigation">', 'after' => '<div class="clearboth"></div></div>', 'next_or_number' => 'next', 'nextpagelink'     => __('<div class="alignright button">Next page&raquo;</div>'),  'previouspagelink' => __('<div class="alignleft button">&laquo;Previous page</div>'),)); ?>
	</div>
	
	<!--  Tags-->
	<?php the_tags('<div id="tags"><b>Tags:</b> ', '&nbsp;&nbsp;|&nbsp;&nbsp;','</div><br />'); ?>
</div>
<!-- Post Ends -->

<?php comments_template(); ?>
<?php endwhile; else: ?>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>