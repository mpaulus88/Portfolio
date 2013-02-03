<!DOCTYPE HTML>
<html lang="<?php bloginfo('language');?>">
<head>
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="http://martinpaulus.be/wp-content/themes/nouveauTheme/script/css3-mediaqueries.js"></script><![endif]-->
	<meta name="HandheldFriendly" content="true">
	<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no">
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="description" content="<?php bloginfo('description');?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/fontello.css"/>
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,500,700' rel='stylesheet' type='text/css'>
	<link href="<?php bloginfo('stylesheet_directory');?>/image/logofav.ico" rel="icon">
	<title><?php bloginfo('name');?></title>

</head>
<body>
	<header id="banner">
	<a title="<?php bloginfo('name');?>" href="<?php bloginfo('wpurl'); ?>"><img id="logo" src="<?php bloginfo('stylesheet_directory');?>/image/logo.png" alt="logo-martin-paulus" title="logo"></a>
	<h1 id="maintitle">
		<a title="<?php bloginfo('name');?>" href="<?php bloginfo('wpurl'); ?>"><?php bloginfo('name');?></a>
	</h1>
	</header>
	<div id="main">
	<nav>
		<h1 class="hidden">Navigation principal</h1>
		<?php wp_nav_menu(); ?>
	</nav>
