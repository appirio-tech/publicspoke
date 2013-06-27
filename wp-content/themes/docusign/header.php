<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name'); ?><?php wp_title(' - ', true, 'left'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- stylesheets -->
		<link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/normalize.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/main.css">
		
        <script src="<?php echo get_bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>

		<?php wp_head(); ?>
	</head>

	<body>
	
		<header>
		
			<div class="wrapper">
		
				<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>" id="logo"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?> Logo" /></a>
				
				<nav>
					<ul class="socialMedia">
						<li><a href="<?php echo get_option('ssFacebookURL'); ?>" class="facebook"><span class="hidden">Facebook</span></a></li>
						<li><a href="<?php echo get_option('ssTwitterURL'); ?>" class="twitter"><span class="hidden">Twitter</span></a></li>
						<li><a href="<?php echo get_option('ssLinkedInURL'); ?>" class="linkedin"><span class="hidden">LinkedIn</span></a></li>
						<li><a href="<?php echo get_option('ssBlogURL'); ?>" class="blog"><span class="hidden">Blog</span></a></li>
					</ul>					
				</nav>

				<div id="mainNav">
				<?php 
					$nav = array(
						  'menu'     	=> 'Main Navigation', 
						  'container'	=> false);
					wp_nav_menu($nav); 				
				?>
				</div>
				
			</div>
			
		</header>
		
		<div id="content-body">
		
			<div class="wrapper">	
			
