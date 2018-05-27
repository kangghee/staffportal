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

</head>
<body>

<div id="container">
	<h1>Staff Portal</h1>

	<div id="body">
            [
            <a href="/staffportal/index.php/add">Add a user</a>
            |
            <a href="/staffportal/index.php/users">View all users</a>
            ]
            <br>
            <hr>
