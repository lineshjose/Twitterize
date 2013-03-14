<?php /*
	Function Name: Linesh Jose
	URI: http://lineshjose.com/
	Description:  Feature-packed theme with a solid design, built-in widgets and a intuitive theme settings interface... Designed by <a href="http://lineshjose.com/">Linesh Jose</a>.
	Version: 11.1
	Author: Linesh Jose 
	Author URI: http://linesjose.com
	roTags: light, white,two-columns, Flexible-width, right-sidebar, left-sidebar, theme-options, threaded-comments, translation-ready, custom-header	
	http://lineshjose.com/
	Both the design and code are released under GPL.
	http://www.opensource.org/licenses/gpl-license.php
*/
//----------------------------------------------------- Theme admin section -------------------------------------------------------//

	$themename = " Twitter Like";
	$shortname = "linesh";
	$options = array (	

		array(  "name" => "Header Logo",
				"desc" => "Would you like a logo in your header?",
				"id" => $shortname."_logo_header",
				"default" => "no",
				"type" => "logo"),	
				
				array(  "name" => "Background Settings",
				"desc" => "Would you like ato change your background image?",
				"id" => $shortname."_background_image",
				"default" => "no",
				"repeat" => "no",
				"position" => "left top",
				"type" => "bg_image"),
				
				array(  "name" => "Background color",
				"desc" => "",
				"id" => $shortname."_background_color",
				"default" => "C0DEED",
				"type" => "bg_color"),
				
				array(  "name" => "Background repeat",
				"desc" => "",
				"id" => $shortname."_background_repeat",
				"default" => "no",
				"type" => "bg_repeat"),
				
							
				array(  "name" => "Background position",
				"desc" => "",
				"id" => $shortname."_background_position",
				"default" => "left top",
				"type" => "bg_position"),
				
				array(  "name" => "Twitter.com",
				"desc" => "<br>http://twitter.com/<b>username</b>",
				"id" => $shortname."_twitter",
				"default" => "lineshjose",
				"type" => "twitter"),
				
				array(  "name" => "Facebook.com",
				"desc" => "<br>http://facebook.com/<b>username</b>",
				"id" => $shortname."_facebook",
				"default" => "linesh.jose",
				"type" => "facebook"),
				
				array(  "name" => "Myspace.com",
				"desc" => "<br>http://myspace.com/<b>username</b>",
				"id" => $shortname."_myspace",
				"default" => "lineshjose",
				"type" => "myspace"),
				
				
				
	);
	

	add_action('admin_head', 'wp_admin_js');
	function wp_admin_js() {
	echo '<script type="text/javascript" src="'; echo bloginfo('template_url'); echo '/javascript/header.js"></script>'."\n"; 
	echo '<script type="text/javascript" src="'; echo bloginfo('template_url'); echo '/javascript/jscolor.js"></script>'."\n"; 
	
	}

	
	function linesh_head() {
				
		if(get_option('linesh_background_image')=='yes'){
		echo '	
		<style>
		body{
		background-image:url('.get_option('linesh_bg_image').');
		background-repeat:';
		if(get_option('linesh_background_repeat')=='vertical'){ echo 'repeat-y';}
		else if(get_option('linesh_background_repeat')=='horizondal'){ echo 'repeat-x';}
		else if(get_option('linesh_background_repeat')=='no'){ echo 'no-repeat';}
		else {echo 'repeat';}
		echo ';
		background-position:'.get_option('linesh_background_position').';
		background-color:#'.get_option('linesh_background_color').';
		}
		</style>
		';
		
		}
		
	}
	add_action('wp_head', 'linesh_head');

	function linesh_add_admin() {
	global $themename, $shortname, $options;

		if ( 'save' == $_REQUEST['action'] ) {
					
					foreach ($options as $value) {
						if( !isset( $_REQUEST[ $value['id'] ] ) ) {  } else { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } }
						
					if(stristr($_SERVER['REQUEST_URI'],'&saved=true')) {
						$location = $_SERVER['REQUEST_URI'];
						} else {
						$location = $_SERVER['REQUEST_URI'] . "&saved=true";		
						}
						
					if ($_FILES["file"]["type"]){
							$directory = dirname(__FILE__) . "/uploads/";				
							move_uploaded_file($_FILES["file"]["tmp_name"],
							$directory . $_FILES["file"]["name"]);
							update_option('linesh_logo', get_settings('siteurl'). "/wp-content/themes/". get_settings('template')."/uploads/". $_FILES["file"]["name"]);
							}
							
					if ($_FILES["bg_image"]["type"]){
							$directory = dirname(__FILE__) . "/uploads/";				
							move_uploaded_file($_FILES["bg_image"]["tmp_name"],
							$directory . $_FILES["bg_image"]["name"]);
							update_option('linesh_bg_image', get_settings('siteurl'). "/wp-content/themes/". get_settings('template')."/uploads/". $_FILES["bg_image"]["name"]);
							}
									
					header("Location: $location");
					die;
			} 
	   
		// Set all default options
		foreach ($options as $default) {
			if(get_option($default['id'])=="") {
				update_option($default['id'],$default['default']);
			}
		}
		add_theme_page('Page title', 'Twitter Like settings', 10, 'twitter-like', 'linesh_header');
		
	}

	add_action('admin_menu', 'linesh_add_admin'); 

	function linesh_header()  {
	global $themename, $shortname, $options;
	?>
	<?php if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';	?>
	<div class="wrap">
	<h2><?php echo $themename; ?></h2>
	<img src="<?php bloginfo('template_url'); ?>/screenshot.png" alt="Twitter Like "  style="margin-right:10px;border:1px solid #aaa;padding:5px;float:left;width:250px;" />
	<p>Thanks for downloading <strong>  Twitter Like  </strong> by Linesh Jose. Hope you enjoy using it!</p>
	<p>There are tons of layout possibilities available with this theme, as well as a bunch of cool features that will surely help you get your site looking and working it's best.</p>
	<p>A lot of hard work went in to programming and designing <strong> Twitter Like </strong>, and if you would like to support Linesh Jose (the guy who designed it) please use the donate link below.</p>

	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" >
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="3JDLHPQ8L298U">
	<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG_global.gif" border="0" name="submit" alt="Donate now.">
	<img alt="" border="0" src="https://www.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
	If you have any questions, comments, or if you encounter a bug, please <a href="http://lineshjose.com/">contact me</a>.
	</form>
	

	<h4 style="margin:0;padding:10px 0 0 0;border-bottom:1px solid #ccc;clear:both;">Theme Settings</h4>
	<form method="post" class="jqtransform" id="myForm" enctype="multipart/form-data" action="">
	
	<table cellpadding="0" cellspacing="10" >
	<tr><td width="80%" valign="top">
	<div id="poststuff" class="">
	<?php
		foreach ($options as $value) { 
		switch ( $value['type'] ) {
		case "logo":			?>
			
			<div class="stuffbox">
				<h3><?php echo $value['name']; ?></h3>
				<div class="inside">
				<table><tr><th><?php echo $value['desc']; ?></th>
				<td><input  name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="radio" value="yes"<?php if ( get_settings( $value['id'] ) == "yes") { echo " checked"; } ?> onclick="showMe()" /><label>Yes</label>
					<input  name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="radio" value="no"<?php if ( get_settings( $value['id'] ) == "no") { echo " checked"; } ?> onclick="showMe()" /><label>No</label>
				</td>
				</tr></table>
                    <div id="headerLogo">
                        Choose a file to upload: <input type="file" name="file" id="file" />
                        <?php if(get_option('linesh_logo')) { echo '<div><img src="'; echo get_option('linesh_logo'); echo '"  style="margin-top:10px;border:1px solid #aaa;padding:10px;" /></div>'; } ?> 
	        		</div>
            	</div>
			</div>
			
   		<?php
			break;	
			case "bg_image":
		?>
				
			<div class="stuffbox">
				<h3><?php echo $value['name']; ?></h3>
				<div class="inside">
				<table><tr><th><?php echo $value['desc']; ?></th>
				<td><input  name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="radio" value="yes"<?php if ( get_settings( $value['id'] ) == "yes") { echo " checked"; } ?> onclick="showMe()" /><label>Yes</label>
					<input  name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="radio" value="no"<?php if ( get_settings( $value['id'] ) == "no") { echo " checked"; } ?> onclick="showMe()" /><label>No</label>
				</td>
				</tr></table>
				
                <div id="Background">
				<table><tr><td style=" max-width:450px;" valign="top" >
                    Choose a file to upload: <input type="file" name="bg_image" id="file" /><br />
                   <?php if(get_option('linesh_bg_image')) { echo '<img src="'; echo get_option('linesh_bg_image'); echo '"  style="margin-top:10px;border:1px solid #aaa;padding:10px; max-width:400px;max-height:100px;"  />';}?>
				 </td>
				<td width="50"></td>
				<td>
				
		<?php
			break;	
			case "bg_color":		?>
			<?php if(get_option('linesh_bg_image')) {?>
			<table><tr><th width="180">Background Color</th>
			<td>
			<input  name="<?php echo $value['id']; ?>" class="color" id="<?php echo $value['id']; ?>" type="text" value="<?php echo get_settings( $value['id'] );?>">
			</td>
			</tr></table>
			<?php }?>
			
		<?php
			break;	
			case "bg_repeat":		?>
			<?php if(get_option('linesh_bg_image')) {?>
			<table><tr><th width="180">Repeat image</th>
			<td>
			<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
			<option value="no" <?php if ( get_settings( $value['id'] ) == "no") { echo " selected"; } ?>  />No</option>
			<option value="vertical" <?php if ( get_settings( $value['id'] ) == "vertical") { echo " selected"; } ?>  />Vertical (y)</option>
			<option value="horizontal" <?php if ( get_settings( $value['id'] ) == "horizontal") { echo " selected"; } ?>  />Horizontal (x)</option>
			<option value="Both" <?php if ( get_settings( $value['id'] ) == "Both") { echo " selected"; } ?>  />Both(x ,y)</option>
			</td>
			</tr></table>
			<?php }?>
			
		<?php
			break;	
			case "bg_position":		?>	
			<?php if(get_option('linesh_bg_image')) {?>
			<table><tr><th width="180">Image position</th>
			<td>
			<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
			<option value="left top" <?php if ( get_settings( $value['id'] ) == "left top") { echo " selected"; } ?>  />Left Top</option>
			<option value="left bottom" <?php if ( get_settings( $value['id'] ) == "left bottom") { echo " selected"; } ?>  />Left Bottom</option>
			<option value="right top" <?php if ( get_settings( $value['id'] ) == "right top") { echo " selected"; } ?>  />Right top</option>
			<option value="right bottom" <?php if ( get_settings( $value['id'] ) == "right bottom") { echo " selected"; } ?>  />Right Bottom</option>
			<option value="center left" <?php if ( get_settings( $value['id'] ) == "middle left") { echo " selected"; } ?>  />Center Left</option>
			<option value="center right" <?php if ( get_settings( $value['id'] ) == "center right") { echo " selected"; } ?>  />Center Right</option>
			<option value="Top center" <?php if ( get_settings( $value['id'] ) == "top center") { echo " selected"; } ?>  />Top Center</option>
			<option value="bottom center" <?php if ( get_settings( $value['id'] ) == "bottom center") { echo " selected"; } ?>  />Bottom Center</option>
			<option value="center center" <?php if ( get_settings( $value['id'] ) == "center center") { echo " selected"; } ?>  />Center Center</option>
			</td>
			</tr></table>
			<?php }?>
			
			
			
				</td></tr></table>
					</div>
				</div>
			</div>
		
		
		<?php
			break;	
			case "twitter":
		?>
				
			<div class="stuffbox">
				<h3>Your Social Usernames</h3>
				<div class="inside">
				<table><tr>
				<td width="250">
					<table><tr><th align="left"><?php echo $value['name']; ?></th></tr>
					<tr><td>
					<input  name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php echo get_settings( $value['id'] );?>">
					<small><?php echo $value['desc']; ?></small>
					</td></tr></table>
				</td>
				
		<?php
			break;	
			case "facebook":
		?>
				<td width="250">
					<table><tr><th align="left"><?php echo $value['name']; ?></th></tr>
					<tr><td>
					<input  name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php echo get_settings( $value['id'] );?>">
					<small><?php echo $value['desc']; ?></small>
					</td></tr></table>
				</td>
		<?php
			break;	
			case "myspace":
		?>		
				<td width="250">
					<table><tr><th align="left"><?php echo $value['name']; ?></th></tr>
					<tr><td>
					<input  name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php echo get_settings( $value['id'] );?>">
					<small><?php echo $value['desc']; ?></small>
					</td></tr></table>
				</td>
				</tr></table>
					</div>
				</div>
			</div>
		<?php
			break;		
		}
	}
	?>
	</div>
	</div>
	</td><td valign="top">
		<div id="poststuff" class="metabox-holder has-right-sidebar" style="margin-top:-10px;">
		<div id="linksubmitdiv" class="postbox " >
		<h3>Current Saved Settings</h3>
			<div id="minor-publishing">
			<ul style="padding:10px 0 5px 5px;">
			<li>Header Logo: <strong><?php echo ucwords(get_option('linesh_logo_header')); ?></strong></li>
			<li>Background Image: <strong><?php echo ucwords(get_option('linesh_background_image')); ?></strong></li>
			<li>Background repeat: <strong><?php echo ucwords(get_option('linesh_background_repeat')); ?></strong></li>
			<li>Background Position: <strong><?php echo ucwords(get_option('linesh_background_position')); ?></strong></li>
			<li>Background color: <strong>#<?php echo ucwords(get_option('linesh_background_color')); ?></strong></li>
			
			</ul>
			<span style="border-bottom:1px solid #ccc;">Social usernames</span>
			<ul style="padding:5px 0 0 5px;">
			<li>Twitter : <strong><?php echo ucwords(get_option('linesh_twitter')); ?></strong></li>
			<li>Facebook: <strong><?php echo ucwords(get_option('linesh_facebook')); ?></strong></li>
			<li>Myspace : <strong><?php echo ucwords(get_option('linesh_myspace')); ?></strong></li>
			</ul>
			
				<div id="major-publishing-actions">
				<input name="save" type="submit" value="Save changes" />    
				<input type="hidden" name="action" value="save" />
				</div>
			</div>
		</div>
	</div>
	</td></tr></table>
	</form>
</div>
<?php  }?>
<?php
//----------------------------------------------------- Theme section -------------------------------------------------------//
	include(TEMPLATEPATH.'/widgets/widget_login.php');

	if (function_exists("register_sidebar")) {
	register_sidebar(array(
	'name' => 'Sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	}


	function new_excerpt_length($length) {// This theme uses post excerpt_length
		return 27;
	}
	add_filter('excerpt_length', 'new_excerpt_length');

	
	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );


	
	



	## Comment function
	if ( ! function_exists( 'twentyten_comment' ) ) :
	function twentyten_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case '' :
		?>
		<li>
		<?php if(get_comment_author_url()){?><a href="<?php echo get_comment_author_url();?>"><?php echo get_avatar( $comment, 32 ); ?></a><?php } 
				else { echo get_avatar( $comment, 32 );} ?>
				
		<div class="comment">
			<div class="info">
			<?php printf( __( '%s', 'twentyten' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?> 
			<small><?php echo human_time_diff(get_comment_time('U'), current_time('timestamp')) . ' ago'; ?> </small>
			<?php if ( $comment->comment_approved == '0' ) : ?>(<em><?php _e( 'Your comment is awaiting moderation.', 'twentyten' ); ?></em>)<?php endif; ?> 
			<?php edit_comment_link( __( '(Edit this)', 'twentyten' ), ' ' );?>
			</div>
			<div class="text"><?php comment_text(); ?></div>
		</div>
		<!-- #comment-##  -->

		<?php
				break;
			case 'pingback'  :
			case 'trackback' :
		?>
		
		
		<p><?php _e( 'Pingback:', 'twentyten' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'twentyten'), ' ' ); ?></p>
		<?php
				break;
		endswitch;
	}
	endif;

?>