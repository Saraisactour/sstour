<?php get_header(); ?>

    <section id="main">
        <div class="row">
          <div class="col s1 left-align"></div>
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
          <img class="hide-on-small-only" src="<?php bloginfo('url'); ?>/wp-content/uploads/2015/08/10731206_536512903152774_766969267735247532_n.jpg" width="100%" height="200px">
        </div>
        <!-- FIN BARRA IZQUIERDA -->
        <!-- CONTENEDOR PRINCIPAL -->
        <div class="col s12 m6 l6 card-panel">
            <article id="single">
              <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                  <h4 class="entry-title hide-on-large-only">
                   <a class="tex-dark" title="Permanent link to <?php the_title_attribute(); ?>" rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h4>
                  <?php
                      if ( has_post_thumbnail() ) {
                      the_post_thumbnail('full', array( 'class' => 'materialboxed responsive-img' ));
                      }else{
                        ?><img class="responsive-img" src="http://placehold.it/660x385"><?php
                      }
                  ?>
                  <span class="card-title hide-on-small-only"><h4 class="white-text condensed light"> <?php the_title(); ?></h4></span>
                  <div class="card-content content-article ">
                    <div class="content">
                      <p><?php echo the_content(); ?></p>
                    </div>
                    <div class="card-action">
                      <div class="col s12 m12 l12 right-align reser">
                        <span class="btn-flat disabled">Bs. <?php echo get_post_meta($post->ID, "Precio", $single = true); ?></span>
                        
                        <a href="http://localhost/reservacion/view/create.php?ID=<?php echo $post->ID;?>" class="waves-effect waves-light btn-large orange darken-3"><i class="material-icons left">perm_contact_calendar</i>Reservar</a>
                      </div>
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
  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">add</i>
    </a>
    <ul>
      <!--<li><a class="btn-floating yellow darken-1"><i class="material-icons">insert_chart</i></i></a></li> -->
      <li><a class="btn-floating green tooltipped" data-position="left" data-delay="50" data-tooltip="Escribenos" href="<?php bloginfo('url'); ?>/contactos"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating orange darken-3 tooltipped" data-position="left" data-delay="50" data-tooltip="Reservar" href="http://localhost/reservacion/view/create.php?ID=<?php echo $post->ID;?>"><i class="material-icons">perm_contact_calendar</i></a></li>
      <li><a class="btn-floating blue tooltipped modal-trigger" data-position="left" data-delay="50" data-tooltip="Banco" href="#moda-bank"><i class="material-icons">payment</i></a></li>
    </ul>
  </div>
  <!-- Modal Structure -->
  <div id="moda-bank" class="modal">
    <div class="modal-content">
      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Bank Sidebar')) : endif; ?>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>
  <?php  get_sidebar()?>

<?php get_footer(); ?>