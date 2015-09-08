<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="container no-found">
	<section class="col s12">
		<header class="page-header center-align">
			<h4 class="page-title flow-text"><?php _e( 'Oops! Pagina no encontrada <i class="small material-icons">thumb_down</i>', 'twentyfifteen' ); ?></h4>
		</header><!-- .page-header -->
		<section class="col s12 center-align btn-home">
			<a class="btn waves-effect waves-light blue condensed" href="<?php bloginfo('url'); ?>">Home</a>
		</section>
	</section>
</div>

<?php get_footer(); ?>
