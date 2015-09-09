<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<title><?php bloginfo('name'); ?>| <?php bloginfo('description'); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, minimum-scale=1">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/css/normalize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/materialize/css/materialize.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/respond.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr2.8.3.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/materialize/js/materialize.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/index.js"></script>

	<?php wp_head(); ?>
</head>
<body>
	<!--<div class="row head">
		<div class="col s12">
			<div class="col s12 m3 l3">
				<img src="http://placehold.it/100x100" alt="aompresentaciones">
			</div>
			<div class="col s12 m5 l5 eslogan">
				<p>Esto es una prueba</p>
			</div>
			<div class="col s12 m4 l4"></div>
		</div>
	</div> -->

	<div class="wrapper" id="inicio">
		<header>
			<nav>
				<a href="<?php bloginfo('url'); ?>" class="brand-logo blue-text"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2015/09/logo-solo-para-pagina.png" width="100px" style="margin-top: -10px;"></a>
				<img class="slogan hide-on-small-only" src="<?php bloginfo('url'); ?>/wp-content/uploads/2015/09/full-day-de-experiencia.png">
				<?php wp_nav_menu(array(
					'container' => false,    // para que no tenga contenedor
					'menu_class' => 'right hide-on-med-and-down',
					'menu_id' => 'main',    // id del menu
					'link_before' => '<span>', // HTML previo al texto de cada sección
					'link_after' => '</span>'    // HTML posterior al texto de cada sección
				)); ?>
				<a href="#" data-activates="slide-out" class="button-collapse"><i class="blue-text mdi-navigation-menu"></i></a>
				<?php wp_nav_menu(array(
					'container' => false,    // para que no tenga contenedor
					'menu_class' => 'side-nav',
					'menu_id' => 'slide-out',    // id del menu
					'link_before' => '<span>', // HTML previo al texto de cada sección
					'link_after' => '</span>'    // HTML posterior al texto de cada sección
				)); ?>
			</nav>
			<!--<nav>
				<a href="#!" class="brand-logo blue-text">Logo</a>
			  <ul class="right hide-on-med-and-down">
			    <li><a class="blue-text" href="#!">First1 Sidebar Link</a></li>
			    <li><a class="blue-text" href="#!">Second1 Sidebar Link</a></li>
			  </ul>
			  <ul id="slide-out" class="side-nav">
			    <li><a class="blue-text" href="#!">First Sidebar Link</a></li>
			    <li><a class="blue-text" href="#!">Second Sidebar Link</a></li>
			  </ul>
			  <a href="#" data-activates="slide-out" class="button-collapse"><i class="blue-text mdi-navigation-menu"></i></a>
			</nav> -->
			<!--<nav>
			    <div class="nav-wrapper blue darken-1">
			      <?php //wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
			    </div>
			  </nav>-->
		</header>