<!DOCTYPE HTML>
<html lang="<?php bloginfo('language');?>">
<head>
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="description" content="<?php bloginfo('description');?>"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>"/>
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,500,700' rel='stylesheet' type='text/css'>
	<title><?php bloginfo('name');?></title>

</head>
<body>
	<header id="banner">
	<img id="logo" src="<?php bloginfo('stylesheet_directory');?>/image/logo.png" alt="logo-martin-paulus" title="logo">
	<h1 id="maintitle">
		<a href="<?php bloginfo('wpurl'); ?>"><?php bloginfo('name');?></a>
	</h1>
	</header>
	<div id="main">
	<nav>
		<?php wp_nav_menu(); ?>
	</nav>
