<?php
/*Template Name: Contactos */

get_header(); ?>

  	<section id="main" class="container">
     <br>
      <div class="row">
        <div class="col s12 m6">
          <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                  
                  <div class="content-article ">
                    <div class="content"><p><?php echo the_content(); ?></p></div>
                  </div>
              <?php endwhile; ?>
              <?php endif; ?>
        </div>
        <div class="col s12 m6 z-depth-3">
          <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Contacts')) : endif; ?>
        </div>
      </div>
  </section> <!-- Fin de main -->

<?php get_footer(); ?>
