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
		<article class="col s12 m6 l6 hoverable card small" id="post-<?php the_ID(); ?>">
			<div class="card-image waves-effect waves-block waves-light">
				<a class="img-arti" href="<?php echo the_permalink(); ?>">
					<?php
						if( $thumbnail == true ) {
							// If the post has a feature image, show it
							if( has_post_thumbnail() ) {
								the_post_thumbnail( $thumbsize, array( 'class' => 'activator' ) );
							// Else if the post has a mime type that starts with "image/" then show the image directly.
							} elseif( 'image/' == substr( $post->post_mime_type, 0, 6 ) ) {
								echo wp_get_attachment_image( $post->ID, $thumbsize );
							}
						}
					?>
				</a>
			</div>
			<div class="conte-card card-content">
				<span class="card-title activator grey-text text-darken-4">
					<h6><?php the_title(); ?><i class="material-icons right">more_vert</i></h6>
				</span>
			</div>
			<div class="card-reveal">
		      <span class="card-title grey-text text-darken-4"><?php the_title(); ?><i class="material-icons right">close</i></span>
		      <p><?php echo get_excerpt(100); ?></p>
		      <a href="<?php the_permalink(); ?>" class="waves-effect orange darken-3 waves-light btn btn">Ver</a>
		    </div>
		</article>
	<?php endwhile; ?>
	</section><!-- .dpe-flexible-posts -->
<?php else: // We have no posts ?>
	<article class="dpe-flexible-posts no-posts">
		<p><?php _e( 'No post found', 'flexible-posts-widget' ); ?></p>
	</article>
<?php	
endif; // End have_posts()
	
echo $after_widget;
