<?php 
	session_start(); //khoi tao session => có thể sử dụng dc biến $_SESSION  

	if( !empty( $_SESSION['user'] ) ){
		echo "hello: " . $_SESSION['user'];
	}else{

		header('Location:login.php'); //dieu huong toi trang login.php
		die;

	}

	?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="asset/admin.css" />
</head>
<body>

<div class="header">
  <h1>Admin page</h1>
</div>

<div class="row">
  <div class="leftcolumn">
  	<!-- navigation -->
	<div class="topnav">

	  <a href="index.php">Managing articles </a>
	  <hr>
	  <a href="themsp.php">Add product </a>
	 
	  <a href="index.php">Product management</a>
	  <a href="#">User management</a>
	  <a href="logout.php">Log out </a>

	</div>

	<!-- END navigation -->
  </div>
 <!-- END left column -->


  <div class="rightcolumn">