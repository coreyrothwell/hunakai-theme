<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('-', true, 'right'); bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/hunakai.css">
	<meta name="description" content="An Oahu grown web design and development company specializing in small businesses and responsive web design">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>	

	<div class="wrapper">
		
		<header class="logo">

			<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Hawaii Web Design">

			<hgroup>
				<h1 id="ourname">Hunakai</h1>
				<h2>Web Design</h2>
			</hgroup>
			
		</header>

		<div class="nav-container">

			<div class="nav-button hide">
				<a href="#">Menu<i class="icon-angle-down"></i></a>
			</div>

			<nav class="navigation">
				<a href="<?php echo get_site_url(); ?>">Home</a>
				<a href="about-us">About Us</a>
				<a href="#portfolio">Portfolio</a>
				<a href="#blog">Blog</a>
				<a href="contact-us">Contact Us</a>
			</nav>

		</div>