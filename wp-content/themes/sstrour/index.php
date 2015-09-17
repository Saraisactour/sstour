<?php get_header(); ?>

<!-- <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us11.list-manage.com","uuid":"2fa9af3692ca5d4eaad977815","lid":"0785e856d9"}) })</script> -->
  <section id="main" class="section scrollspy">
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
			<div class="social">
                <?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
            </div>
			<br>
			<ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header"><i class="material-icons">filter_drama</i>Datos Bancarios</div>
                <div class="collapsible-body" style="font-size:12px;">
                  <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Bank Sidebar')) : endif; ?>
                </div>
              </li>
            </ul>
            <br>
			<img class="hide-on-small-only" src="<?php bloginfo('url'); ?>/wp-content/uploads/2015/08/10731206_536512903152774_766969267735247532_n.jpg" width="100%" height="200px">
			<br><br>
			<a class="btn waves-effect waves-light green condensed" href="#">Franquicias</a>
          	<a class="btn waves-effect waves-light blue condensed" href="<?php bloginfo('url'); ?>/nuestro-equipo">Nuestro Equipo</a>
		</div>
		<!-- FIN BARRA IZQUIERDA -->

		<!-- CONTENEDOR PRINCIPAL -->
		<div class="col s12 m10 l10" style="margin-top: 2%">
			<!-- CONTENEDOR SLIDER PRINCIPAL -->
			<div class="col s12 m8 l8 hide-on-small-only">
				<div class="row">
					<?php echo do_shortcode('[advps-slideshow optset="1"]' ); ?>
				</div>
				
			</div>
			<div class="col s12 m4 l4 hide-on-small-only">
				<div class="video-container">
			        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Slider_header')) : endif; ?>
			      </div>
			      <br>
			      <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2015/08/10731206_536512903152774_766969267735247532_n.jpg" width="100%" height="200px">
			</div>
			<!-- FIN CONTENEDOR SLIDER PRINCIPAL -->
			<div class="row ">
				<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" class="col s12 m4 l4">
					<div class="hoverable card card-index">
				    	<div class="card-image">
				    		<?php
				    		if ( has_post_thumbnail() ) {
								the_post_thumbnail(array( 'class' => 'responsive-img' ));
							}else{
								?><img src="http://placehold.it/320x195"><?php
							}

				    		 ?>
				    		<span class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
				    	</div>
				    	<span class="left-align card-category">
					    		<blockquote>
					    			<?php the_category($post_id->ID_post) ?>
					    			<span class="right">
					    			<b><?php echo get_post_meta($post->ID, "Fecha", $single = true); ?></b>
					    		</span> 
					    		</blockquote>
					    		
					    	</span>
				    	<div class="card-content">
				    		<p><?php echo get_excerpt(100); ?></p>
					    </div>
				    	<div class="card-action">
			    			<span class="btn-flat disabled no-padding">Bs. <?php echo get_post_meta($post->ID, "Precio", $single = true); ?>
			    			</span>
			    			<a href="<?php the_permalink(); ?>" class="waves-effect orange darken-3 waves-light btn btn">Ver</a>
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

  