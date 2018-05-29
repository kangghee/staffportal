<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
        <link href="<?= base_url();?>css/default.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">prototype
//<![CDATA[
            base_url='<?= base_url(); ?>';
//]]>
        </script>
        <noscript>
            You will not be able to view this site if Javascript is not enabled.  
            Please turn on Javascript to use this site.
        </noscript>
        <script>
            var tcookie=new Date();
            check_cookie=(tcookie.getTime() + '');
            document.cookie="check_cookie=" + check_cookie + "; path=/";
            if (document.cookie.indexOf(check_cookie,0) < 0) {
                alert("If you continue at this site, you must allow cookies to\n\
                be enabled in your web browser.  Otherwise you will not be \n\
                able to view this site.");
            }
        </script>

</head>
<body>

<div id="container">
	<h1>Staff Portal</h1>

	<div id="body">
            [
		<?php
			$link_protocol = USE_SSL ? 'https' : NULL;

			if( $this->router->default_controller == 'Welcome/home' )
				echo '' . anchor( site_url('', $link_protocol ),'Home') . '|';
		?>
            
		<?php
			echo isset( $auth_user_id )
				? logout_anchor('Welcome/logout', 'Logout')
				: login_anchor('Welcome', 'Login', 'id="login-link"' );
		?>
            ]
            [
            <a href="/staffportal/index.php/add">Add a user</a>
            |
            <a href="/staffportal/index.php/users">View all users</a>
            ]
            <br>
            <hr>

