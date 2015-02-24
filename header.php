<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<div class="drawer-wrap">
		<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<!-- <div id="inner-header" class="wrap cf"> -->
				<!-- </div> -->
				
				<a href="<?php echo home_url(); ?>" rel="nofollow"><img title="Patrick Marich's Website, PMarich.com" src="<?php echo get_template_directory_uri(); ?>/library/images/pmarich-logo_2015.png" alt="Patrick Marich's Website, PMarich.com" class="pmarich-logo" /></a>
				<nav class="clearfix" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<ul class="nav social">
						<li><a href="https://www.linkedin.com/profile/view?id=31860689&trk=nav_responsive_tab_profile"><img title="LinkedIn" class="social-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/icon-linkedin.svg" alt="Find me on LinkedIn" /></a></li>
						<li><a href="https://twitter.com/pmarich"><img title="Twitter" class="social-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/icon-twitter.svg" alt="Find me on Twitter" /></a></li>
						<li><a href="http://codepen.io/pmarich/"><img title="CodePen" class="social-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/icon-codepen.svg" alt="Find me on CodePen" /></a></li>
					</ul>
					<ul class="nav main-nav">
						<li><a href="<?php echo home_url(); ?>/portfolio">Portfolio</a><span class="add-on">My work</span></li>
						<li><a href="<?php echo home_url(); ?>/about">About Me</a><span class="add-on">How I got here</span></li>
						<li><a href="<?php echo home_url(); ?>/blog">Blog</a><span class="add-on">What's going on</span></li>
						<li><a href="<?php echo home_url(); ?>/contact">Contact</a><span class="add-on">Making something?</span></li>
						<li><a href="<?php echo home_url(); ?>">Resume</a><span class="add-on">(PDF)</span></li>
					</ul>			
				</nav>
				
				<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					

					<!-- <h1><?php //bloginfo('name'); ?></h1> -->
					<?php // bloginfo('description'); ?>
		</header>
		<div id="container">
			<header class="mobile-header">
				<span class="menu-toggle"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-menu.svg" alt="Menu icon" /></span>
				<a href="<?php echo home_url(); ?>" rel="nofollow"><img title="Patrick Marich's Website, PMarich.com" src="<?php echo get_template_directory_uri(); ?>/library/images/logo_2015-mobile.svg" alt="Patrick Marich's Website, PMarich.com" class="pmarich-logo" /></a>
			</header>
			
