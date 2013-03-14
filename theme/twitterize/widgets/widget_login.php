<?php /*
 Widget Name:Login
*/?>
<?php 
function widget_login() { ?>
<?php global $user_ID, $user_identity, $user_level ?>
 <?php if ( $user_ID ) : ?>
<h2>Control panel</h2>
<ul>
<li>Logged in as: <strong><?php echo $user_identity ?></strong></li>
<li><a href="<?php bloginfo('url') ?>/wp-admin/">Dashboard</a></li>
<?php if ( $user_level >= 1 ) : ?>
<li><a href="<?php bloginfo('url') ?>/wp-admin/post-new.php">Write</a></li>
<?php endif // $user_level >= 1 ?>
<li><a href="<?php bloginfo('url') ?>/wp-admin/profile.php">Profile</a></li>
<li><a href="<?php echo wp_logout_url() ?>&amp;redirect_to=<?php echo urlencode($_SERVER['REQUEST_URI']) ?>">Log Out</a></li>
</ul>
 <?php else : ?>
<h2>User Login</h2>
<div>
<form action="<?php bloginfo('url') ?>/wp-login.php" method="post" class="login">
<table cellpadding="1">
<tr>
<th><label for="log">Username: </label></th>
<td><input type="text" name="log" id="log" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>"   class="textbox" /></td>
</tr>
<tr>
<th><label for="pwd">Password: </label></th>
<td><input type="password" name="pwd" id="pwd"    class="textbox"/></td>
</tr>
<tr>
<td></td>
<td><input name="rememberme" id="rememberme" type="checkbox"   />
<label for="rememberme">Remember Me</label>
<input type="submit" name="submit" value="Login" class="button" /></td>
</tr>
</table>

<?php if ( get_option('users_can_register') ) { ?><a href="<?php bloginfo('url') ?>/wp-register.php">Register</a>&nbsp;|&nbsp;
<?php } ?>
<a href="<?php bloginfo('url') ?>/wp-login.php?action=lostpassword">Lost your password</a>
</form>
</div>
<?php endif // get_option('users_can_register') ?>
<?php
}
function widget_myLogin($args) {
extract($args); 
echo $before_widget;
widget_login();
echo $after_widget; 
}
register_sidebar_widget(__('User Login'), 'widget_myLogin');
?>