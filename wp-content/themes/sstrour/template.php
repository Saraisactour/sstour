<?php
/*Template Name: Diseño A */
?>


<?php get_header(); ?>

  	<section id="main" class="container">
        <!-- CONTENEDOR PRINCIPAL -->
        <div class="col s12 m12 l12">
            <article id="single">
              <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                  <h3 class="entry-title center-align"><a title="Permanent link to <?php the_title_attribute(); ?>" rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <?php
                    if( $thumbnail == true ) {
                      // If the post has a feature image, show it
                      if( has_post_thumbnail() ) {
                        the_post_thumbnail( $thumbsize );
                      // Else if the post has a mime type that starts with "image/" then show the image directly.
                      } elseif( 'image/' == substr( $post->post_mime_type, 0, 6 ) ) {
                        echo wp_get_attachment_image( $post->ID, $thumbsize );
                      }
                    }
                  ?>
                  <div class="content-article ">
                  <div class="content"><p><?php echo the_content(); ?></p></div>
                </div>
              <?php endwhile; ?>
              <?php endif; ?>
            </article>
        </div>
  </section> <!-- Fin de main -->

<?php get_footer(); ?>
