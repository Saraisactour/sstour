<!DOCTYPE html>
<html lang="es">
<head>
	<title><?php bloginfo('name'); ?>| <?php bloginfo('description'); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, minimum-scale=1">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/css/normalize.css">
	<link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/materialize/css/materialize.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/respond.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr2.8.3.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/materialize/js/materialize.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/index.js"></script>

	<?php wp_head(); ?>
</head>
<body>
	<div class="row head">
		<div class="col s12">
			<div class="col s12 m3 l3">
				<img src="http://placehold.it/100x100" alt="aompresentaciones">
			</div>
			<div class="col s12 m5 l5 eslogan">
				<p>Esto es una prueba</p>
			</div>
			<div class="col s12 m4 l4"></div>
		</div>
	</div>
	<div class="wrapper">
		<header>
			<nav>
			    <div class="nav-wrapper blue darken-1">
			      <?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
			    </div>
			  </nav>
		</header>