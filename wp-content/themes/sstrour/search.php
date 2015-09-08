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
            <br>
            <a class="btn waves-effect waves-light green condensed" href="#">Franquicias</a>
                  <a class="btn waves-effect waves-light blue condensed" href="#">Nuestro Equipo</a>
            <img class="hide-on-small-only" src="http://www.saraisactour.com.ve/wp-content/uploads/2015/08/10731206_536512903152774_766969267735247532_n.jpg" width="100%" height="200px">
          </div>
        <!-- FIN BARRA IZQUIERDA -->
        <!-- CONTENEDOR PRINCIPAL -->
        <div class="col s12 m10 l10">
          <blockquote><h5>Resultados de la búsqueda</h5></blockquote>
          <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

            <article class="row card-panel hoverable">
              <div class="col s12 m4 l4">
                <?php
                  if ( has_post_thumbnail() ) {
                  the_post_thumbnail('medium', array( 'class' => 'responsive-img' ));
                }else{
                  ?><img class="responsive-img" src="http://placehold.it/300x200"><?php
                }
               ?>
              </div>
              <div class="col s12 m8 l8">
                <div class="row">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </div>
                <div class="row">
                <?php echo get_excerpt(100); ?>
                </div>
              </div>
            </article>

          <?php endwhile; ?>
          <?php if (function_exists("pagination")) {
                    pagination($additional_loop->max_num_pages);
                } ?>
          <?php  else: ?>
          <div class="entry"><?php _e('Lo sentimos, no hay resultados con este término de búsqueda.'); ?></div>
          <?php endif; ?>
        </div><!-- FIN CONTENEDOR PRINCIPAL -->
      </div>
    </section> <!-- Fin de main -->

<?php  get_sidebar()?>
<?php get_footer(); ?>