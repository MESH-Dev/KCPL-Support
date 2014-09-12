<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/docs.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/pygments-manni.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,600,700,400italic,600italic,700,italic' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
	  <script src="./assets/js/html5shiv.js"></script>
	  <script src="./assets/js/respond.min.js"></script>
	<![endif]-->

    <script src="//use.typekit.net/drm7klb.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <link href="<?php bloginfo('template_directory'); ?>assets/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="<?php bloginfo('template_directory'); ?>/assets/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="<?php bloginfo('template_directory'); ?>/assets/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="<?php bloginfo('template_directory'); ?>/assets/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="<?php bloginfo('template_directory'); ?>/assets/ico/favicon.png" rel="shortcut icon">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <a class="sr-only" href="#content">Skip navigation</a>
    <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-target=".bs-navbar-collapse" data-toggle="collapse" type="button">
                	<span class="sr-only">Toggle navigation</span>
                	<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                	<img src="<?php header_image(); ?>">
				</a>
            </div>

			<?php
			if(has_nav_menu('main-nav')){
				$defaults = array(
					'theme_location'  => 'main-nav',
					'menu'            => 'main-nav',
					'container'       => 'nav',
					'container_class' => 'collapse navbar-collapse bs-navbar-collapse',
					'container_id'    => '',
					'menu_class'      => 'nav navbar-nav',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);

				wp_nav_menu( $defaults );
			} ?>
        </div>
    </header>
