<?php /*
	Template Name: Comments
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

<div id="respond">
<!-- #comments -->
<fieldset id="comments">
<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyten' ); ?></p>
		</fieldset>
<!-- #comments -->
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>
<?php 	// You can start editing here -- including this comment! ?>
<?php if ( have_comments() ) : ?>
<legend><?php printf( _n( 'One Comment', '%1$s Comments', get_comments_number(), 'twentyten' ), number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );?></legend>
<ol class="commentlist">
<?php wp_list_comments( array( 'callback' => 'twentyten_comment' ) ); ?>

</ol>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
<div class="navigation">
<div class="nav-previous"><?php previous_comments_link( __( '<div class="alignleft button">&laquo;Older Comments</div>', 'twentyten' ) ); ?></div>
<div class="nav-next"><?php next_comments_link( __( '<div class="alignright button">Newer Comments &raquo;</div>', 'twentyten' ) ); ?></div>
<div class="clearboth"></div>
</div>
<!-- .navigation -->
<?php endif; // check for comment navigation ?>
<?php else : // this is displayed if there are no comments so far ?>
<?php if ('open' == $post->comment_status) : ?>
<!-- If comments are open, but there are no comments. -->
<?php else : // comments are closed ?>	<!-- If comments are closed. -->
<p class="nocomments">Comments are closed.</p>
<?php endif; ?>
<?php endif; ?>

<br />
<fieldset id="comments">
<?php if ('open' == $post->comment_status) : ?>
<legend>Leave a comment</legend>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>
<table cellpadding="0" cellspacing="8" >
<?php else : ?>
<table cellpadding="0" cellspacing="8" >
<tr><td>
<table cellpadding="0" cellspacing="0" >
<tr>
<td align="left"><span><?php if ($req) echo "*"; ?></span><label for="author"> Name</label><br /><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1"  class="textbox" /></td>
<td><span><?php if ($req) echo "**"; ?></span><label for="email"> Mail</label><br /><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>"  tabindex="2" class="textbox" /></td>
<td><label for="url">Website</label><br /><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" class="textbox"  /></td>
</tr>
</table>
</td></tr>
<?php endif; ?>
<tr>
<td ><span><?php if ($req) echo "*"; ?></span><label for="comment">Your Comment</label><br />
<textarea name="comment" id="comment"  tabindex="4" class="textarea" ></textarea><br/>
<small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small>
<br /><br />
<input name="submit" type="submit" id="submit" tabindex="5" value="Post"  class="button"/>
<input name="Reset" type="Reset" id="submit" tabindex="5" value="Clear"  class="button"/>
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
<span>*</span> Required , <span>**</span> will not be published.
</td>
</tr>
</table>
</p>
<?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>
</fieldset>
</div>