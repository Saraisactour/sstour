<?php get_header(); ?>
<section class="main">
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
			<br>
			<a class="btn waves-effect waves-light green condensed" href="#">Franquicias</a>
          	<a class="btn waves-effect waves-light blue condensed" href="#">Nuestro Equipo</a>
			<img class="hide-on-small-only" src="http://www.saraisactour.com.ve/wp-content/uploads/2015/08/10731206_536512903152774_766969267735247532_n.jpg" width="100%" height="200px">
		</div>
        <!-- FIN BARRA IZQUIERDA -->
        <!-- CONTENEDOR PRINCIPAL -->
        <div class="col s12 m10 l10">
	        <?php if ( have_posts() ) : 
	        	the_archive_title( '<blockquote><h5 class="page-title">', '</h5></blockquote>' );
	        	the_archive_description( '<div class="taxonomy-description">', '</div>' );
	    	?>
	    	<?php while ( have_posts() ) : the_post(); ?>
	        <article id="post-<?php the_ID(); ?>" class="col s12 m4 l4">
	        	<div class="hoverable card card-index">
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
		    			<span class="btn-flat disabled">Bs. <?php echo get_post_meta($post->ID, "Precio", $single = true); ?>
		    			</span>
		    			<a href="<?php the_permalink(); ?>" class="waves-effect orange darken-3 waves-light btn btn">Ver</a>
		            </div>
	        	</div>
	        </article>
	        <?php endwhile; ?>
	        <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>