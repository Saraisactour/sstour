<?php get_header(); ?>


  <section id="main">
	<div class="row">
		<!-- BARRA IZQUIERDA -->
		<div class="brr-izq col s12 m2 l2 left-align">
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
				<input type="text" placeholder="Buscar full day..." value="<?php the_search_query(); ?>" name="s" id="s" />
				<!--<button type="submit" class="right-text btn waves-effect waves-light condensed "  id="searchsubmit"><i class="tiny mdi-action-search black-text"></i></button>-->
			</form>

			<div class="dynamic_sidebar hide-on-small-only">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Sidebar')) : endif; ?>
			</div>
			<a class="btn waves-effect waves-light green condensed" href="#">Alle Saugroboter</a>
			<a class="btn waves-effect waves-light blue condensed" href="#">Saugroboter-Vergleich</a>
		</div>
		<!-- FIN BARRA IZQUIERDA -->

		<!-- CONTENEDOR PRINCIPAL -->
		<div class="col s12 m10 l10">
			<!-- CONTENEDOR SLIDER PRINCIPAL -->
			<div class="col s12 m12 l12">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Slider_header')) : endif; ?>Slider
			</div>
			<!-- FIN CONTENEDOR SLIDER PRINCIPAL -->
			<div class="row ">
				<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" class="col s12 m4 l4">
					<div class="hoverable card">
				    	<div class="card-image">
				    		<?php
				    		if ( has_post_thumbnail() ) {
								the_post_thumbnail('featured');
							}else{
								?><img src="http://placehold.it/320x195"><?php
							}

				    		 ?>
				    		<span class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
				    	</div>
				    	<div class="card-content"><?php echo get_excerpt(100); ?></div>
				    	<div class="card-action">
			    			<span class="btn-flat disabled">Bs. <?php echo get_post_meta($post->ID, "Precio", $single = true); ?>
			    			</span>
			    			<a href="<?php the_permalink(); ?>" class="waves-effect blue waves-light btn btn tooltipped" data-position="right" data-delay="50" data-tooltip="<?php the_title(); ?>">Ver</a>
			            </div>
				  	</div>
				</article>
				<?php endwhile; else: ?>
					<p><?php _e('No hay Datos Cargados .'); ?></p>
				<?php endif; ?>
			</div>
		</div>
		<!-- FIN CONTENEDOR PRINCIPAL -->
	</div>
  </section> <!-- Fin de main -->

  <?php get_footer(); ?>