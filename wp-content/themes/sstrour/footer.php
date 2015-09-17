<footer class="page-footer foo blue darken-1">
          <!-- <div class="container">
            <div class="row">
              <div class="col s12 m3 l3">
                <?php //if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer_1')) : endif; ?>
              </div>
              <div class="col s12 m3 l3">
                <?php //if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer_2')) : endif; ?>
              </div>
              <div class="col s12 m3 l3">
                <?php //if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer_3')) : endif; ?>
              </div>
              <div class="col s12 m3 l3">
                <?php //if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer_4')) : endif; ?>
              </div>
            </div>
          </div> -->
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright <?php bloginfo('name'); ?> , <?=date('Y');?>
            <div class="grey-text text-lighten-4 right">
              <div class="social">
                <?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
              </div>
            </div>
            
            <!-- <a href="#inicio" id="toTop" style="display: inline;"><span id="toTopHover" style="opacity: 0;"></span>To Top</a> -->
            </div>
          </div>
        </footer>

</div> <!-- Fin de wrapper -->

<?php wp_footer(); ?>
</body>
</html>