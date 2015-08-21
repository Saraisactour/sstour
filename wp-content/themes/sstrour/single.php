<?php get_header(); ?>

  	<section id="main">
  	  	<div class="row">
          <div class="col s1 left-align"></div>
        <!-- BARRA IZQUIERDA -->
        <div class="col s12 m2 l2 left-align">
              <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
            <input type="text" placeholder="Buscar full day..." value="<?php the_search_query(); ?>" name="s" id="s" />
            <!--<button type="submit" class="right-text btn waves-effect waves-light condensed "  id="searchsubmit"><i class="tiny mdi-action-search black-text"></i></button>-->
          </form>
          <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Sidebar')) : endif; ?>
          <br>
          <a class="btn waves-effect waves-light green condensed" href="#">Alle Saugroboter</a>
      <a class="btn waves-effect waves-light blue condensed" href="#">Saugroboter-Vergleich</a>
      <img src="http://www.saraisactour.com.ve/wp-content/uploads/2015/08/10731206_536512903152774_766969267735247532_n.jpg" width="100%" height="200px">
        </div>
        <!-- FIN BARRA IZQUIERDA -->
        <!-- CONTENEDOR PRINCIPAL -->
        <div class="col s12 m6 l6 card-panel">
            <article id="single">
              <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                  <h4 class="entry-title">
                   <a class="tex-dark hide-on-large-only" title="Permanent link to <?php the_title_attribute(); ?>" rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h4>
                  <?php
                      if ( has_post_thumbnail() ) {
                      the_post_thumbnail('featured-medium', array( 'class' => 'materialboxed responsive-img' ));
                      }else{
                        ?><img src="http://placehold.it/320x195"><?php
                      }
                  ?>
                  <span class="card-title hide-on-small-only"><h4 class="white-text condensed light"> <?php the_title(); ?></h4></span>
                  <div class="content-article ">
                    <div class="content">
                      <p><?php echo the_content(); ?></p>
                    </div>
                    <div class="col s12 m6 l6 right-align reser">
                      <span class="btn-flat disabled">Bs. <?php echo get_post_meta($post->ID, "Precio", $single = true); ?></span>
                      
                      <a class="waves-effect waves-light btn-large orange darken-3"><i class="material-icons left">perm_contact_calendar</i>Reservar</a>
                    </div>
                  </div>

              <?php endwhile; ?>
              <?php endif; ?>
            </article>
        </div>
        <!-- BARRA DERECHA -->
        <div class="col s12 m4 l4 left-align">
          <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar')) : endif; ?>
          <div class="row">
            <?php echo do_shortcode('[advps-slideshow optset="2"]' ); ?>
          </div>
        </div>
        <!-- FIN BARRA DERECHA -->
        </div>
  </section> <!-- Fin de main -->
  <?php  get_sidebar()?>

<?php get_footer(); ?>