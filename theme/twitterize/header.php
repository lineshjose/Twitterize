<?php /*
	Template Name: Header
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' - '; } ?><?php bloginfo('name'); if(is_home()) { echo ' - '; bloginfo('description'); } ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /><!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
<meta name="msvalidate.01" content="DC93A3CCC930A47C57FA711788B3C735" />
<meta name="google-site-verification" content="eBOKAWXk0DvthhPTc_5zoaBK2xveTqpHmUa2D4MUH_s" />
<META name="y_key" content="5d4a4ebdc532455d" />
<link rel="shortcut icon" href="<?php echo  get_stylesheet_directory_uri();?>/images/favicon.jpg" >
<script type="text/javascript">
function bookmark(bmurl, bmtitle){
   if(navigator.userAgent.indexOf('MSIE') >= 0 && navigator.userAgent.indexOf('Opera') < 0){
       window.external.AddFavorite(bmurl, bmtitle);
   }
   else{
       window.sidebar.addPanel(bmtitle, bmurl,""); 
	    window.external.AddFavorite(bmurl, bmtitle);
   }
}
</script>
<script type="text/javascript"><!--//--><![CDATA[//><!--

sfHover = function() {
	var sfEls = document.getElementById("menu").getElementsByTagName("li");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
//--><!]]></script>
</head>
<body>
<div id="wrapper">
<div id="container">
<!-- start header -->
<div id="header">
<div id="logo">
<?php if (get_option('linesh_logo_header') == "yes" && get_option('linesh_logo')) { ?>
<a href="<?php bloginfo('url'); ?>/"><img src="<?php echo get_option('linesh_logo'); ?>" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
<?php } else { ?> <div class="title"><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></div> 
<!-- <p><?php bloginfo('description'); ?>	</p> -->
<?php } ?>
</div>
<!-- start main menu -->
<div id="menu">
<ul>
<li class="<?php if (is_home()) echo ' current_page_item'; ?>"><a href="<?php echo get_option('home'); ?>/" class="current_page_item">Home</a></li>
<?php wp_list_pages('title_li=' ); ?>
</ul>
</div>
<!-- end main  menu -->

<div class="clearboth"></div>
</div>
<!-- end header -->

<!-- Content starts -->
<table id="page" cellpadding="0" cellspacing="0" >
<tr>
<td id="content">