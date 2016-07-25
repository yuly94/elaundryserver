<!DOCTYPE html>
<html>
	<head>
		<title> <?php echo $ep_title; ?> </title>
		<link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['ep_base_url']; ?>view/css/materialize.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['ep_base_url']; ?>view/css/styles.css"  media="screen,projection"/>
		<script type="text/javascript" src="<?php echo $GLOBALS['ep_base_url']; ?>view/js/jquery-1.11.3.js"></script>
		<script type="text/javascript" src="<?php echo $GLOBALS['ep_base_url']; ?>view/js/jquery-migrate-1.2.1.js"></script>
		<script type="text/javascript" src="<?php echo $GLOBALS['ep_base_url']; ?>view/js/materialize.js"></script>
		<link rel="shortcut icon" href="<?php echo $GLOBALS['ep_base_url']; ?>view/images/favicon.png" type="image/x-icon" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Delete this later -->
		<link rel="stylesheet" href="<?php echo $GLOBALS['ep_base_url']; ?>view/css/deletethis.css">
		<script src="<?php echo $GLOBALS['ep_base_url']; ?>view/js/deletethis.js"></script>
	</head>
	<body>
		<div class="container">
		
		<!-- Dropdown Structure -->
			<ul id="dropdown1" class="dropdown-content">
			  <li><a href="<?php echo $ep_dynamic_url; ?>dashboard/settings">My Account</a></li>
			  <li><a href="<?php echo $ep_dynamic_url; ?>dashboard/password">Change Password</a></li>
			  <li class="divider"></li>
			  <li><a href="<?php echo $ep_dynamic_url; ?>dashboard/logout">Logout</a></li>
			</ul>
			<nav>
			  <div class="nav-wrapper green accent-4">
				<a href="<?php echo $GLOBALS['ep_base_url']; ?>" class="brand-logo"> <?php echo $GLOBALS['website_name']; ?> </a>
				<?php if(strlen($_SESSION["easyphp_sessionid"]) > 1) { ?>
				<ul class="right hide-on-med-and-down">
				  <!-- Dropdown Trigger -->
				  <li><a class="dropdown-button"  style="text-transform: capitalize"  href="#!" data-activates="dropdown1"> Hi, <?php echo $userdata['name']; ?><i class="material-icons right">arrow_drop_down</i></a></li>
				</ul>
				<?php } ?>
			  </div>
			</nav>
			
			<div class="wrapper"> 