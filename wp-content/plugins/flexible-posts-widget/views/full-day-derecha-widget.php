<?php
/**
 * Flexible Posts Widget: TEMPLATE PARA MOSTRAR LOS POST DE LA CAT FULL DAY
 */

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');

echo $before_widget;

if ( !empty($title) )
	?><div class="title-widget-full_day"><h5><?php //echo "Full Day";?></h5></div>
<?php

if( $flexible_posts->have_posts() ):
?>
	<section class=" row dpe-flexible-posts">
	<?php while( $flexible_posts->have_posts() ) : $flexible_posts->the_post(); global $post; ?>
		<div class="col s12 m8 no-padding offset-m2">
			<div class="card hoverable">
				<div class="card-image waves-effect waves-block waves-light">
				<?php
		    		if ( has_post_thumbnail() ) {
						the_post_thumbnail(array( 'class' => 'responsive-img activator' ));
					}else{
						?><img class="responsive-img activator" src="http://placehold.it/300x159"><?php
					}
		    	?>
		    	</div>
		    	<div class="card-content">
			      <span class="card-title activator grey-text text-darken-3"><h6><b><?php the_title(); ?></b></h6></span>
			    </div>
			    <div class="card-reveal"> 
			      <span class="card-title grey-text text-darken-4"><h6><b><?php the_title(); ?></b><i class="material-icons right" style="
    font-size: 16px;">close</i></h6></span>
			      <p class="truncate"><?php echo get_excerpt(100); ?></p>
			      <div class="card-action">
	    			<span class="btn-flat disabled no-padding tiny">Bs. <?php echo get_post_meta($post->ID, "Precio", $single = true); ?>
	    			</span>
	    			<a href="<?php the_permalink(); ?>" class="waves-effect orange darken-3 waves-light btn small right">Ver</a>
	               </div>
			    </div>
			</div>
		</div>
	<?php endwhile; ?>
	</section><!-- .dpe-flexible-posts -->
<?php else: // We have no posts ?>
	<article class="dpe-flexible-posts no-posts">
		<p><?php _e( 'No post found', 'flexible-posts-widget' ); ?></p>
	</article>
<?php	
endif; // End have_posts()
	
echo $after_widget;
