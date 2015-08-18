<?php get_header(); ?>

  	<section id="main">
  	  	<div class="row">
          <div class="col s1 left-align">s</div>
        <!-- BARRA IZQUIERDA -->
        <div class="col s12 m2 l2 left-align">
          <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Sidebar')) : endif; ?>
        </div>
        <!-- FIN BARRA IZQUIERDA -->
        <!-- CONTENEDOR PRINCIPAL -->
        <div class="col s12 m6 l6 card-panel">
            <article id="single">
              <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                  <h4 class="entry-title">
                    <a class="tex-dark" title="Permanent link to <?php the_title_attribute(); ?>" rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h4>
                  <?php
                      if ( has_post_thumbnail() ) {
                      the_post_thumbnail('featured-medium', array( 'class' => 'materialboxed responsive-img' ));
                      }else{
                        ?><img src="http://placehold.it/320x195"><?php
                      }
                  ?>
                  <div class="content-article ">
                  <div class="content">
                    <p><?php echo the_content(); ?></p>
                  </div>
                  <div class="social right-align">
                    <b><?php the_date(); ?></b><?php echo do_shortcode('[cn-social-icon]' );?>
                  </div>
                </div>

              <?php endwhile; ?>
              <?php endif; ?>
            </article>
        </div>
        <!-- BARRA DERECHA -->
        <div class="col s12 m2 l2 left-align">
          <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar')) : endif; ?>
        </div>
        <!-- FIN BARRA DERECHA -->
        <div class="col s1 right-align">s</div>
        </div>
  </section> <!-- Fin de main -->
  <?php  get_sidebar()?>

<?php get_footer(); ?>