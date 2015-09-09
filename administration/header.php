<?php
$current_page = basename($_SERVER['SCRIPT_FILENAME']); 
if($current_page != 'login.php' && $current_page != 'register.php')
{
	include 'session.php';
}
?>
<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<div class = "content">
<div id = "nav">
	<a href = "admin.php">Home | </a>
	<a href = "addnews.php">Add news | </a>
	<a href = "viewnews.php">View All News |</a>
	<a href = "viewapps.php">View All Applications|</a>
	<a href = "change.php">Change Password|</a>
	<a href = "logout.php">Logout </a>
</div>
<br />